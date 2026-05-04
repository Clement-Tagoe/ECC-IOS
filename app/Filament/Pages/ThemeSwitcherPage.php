<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use UnitEnum;

/**
 * Theme Switcher Page
 * -------------------
 * Registers as a Filament page that lets users browse and apply
 * any of the 18 palettes defined in config/filament-themes.php.
 *
 * The chosen theme key is stored in:
 *   1. The authenticated user's `theme` column  (DB, persistent)
 *   2. A browser cookie `filament_theme`         (fallback / guests)
 *
 * Make sure to:
 *   - Run: php artisan make:migration add_theme_to_users_table
 *   - Add  $fillable[] = 'theme'  to your User model
 *   - Register the page in your PanelProvider: ->pages([ThemeSwitcherPage::class])
 *   - Apply the theme in AppServiceProvider (see applyTheme() below)
 */
class ThemeSwitcherPage extends Page
{
    protected static string | BackedEnum | null $navigationIcon = Heroicon::Swatch;
    protected static ?string $navigationLabel = 'Themes';
    protected static ?string $title = 'Choose Your Theme';
    protected static ?int $navigationSort = 10;
    protected string $view = 'filament.pages.theme-switcher-page';
    protected static string | UnitEnum | null $navigationGroup = 'Others';

    /** Currently active theme key (reactive Livewire property) */
    public string $activeTheme = 'ocean-depths';

    public function mount(): void
    {
        $user = Auth::user();
        $this->activeTheme = $user?->theme
            ?? Cookie::get('filament_theme', 'ocean-depths');
    }

    /**
     * Called when the user clicks "Apply Theme" in the blade view.
     * Sends a Livewire event so JS can update CSS variables instantly,
     * then persists the choice.
     */
    public function applyTheme(string $key): void
    {
        $themes = config('filament-themes');

        if (! isset($themes[$key])) {
            Notification::make()
                ->title('Unknown theme')
                ->danger()
                ->send();
            return;
        }

        $this->activeTheme = $key;

        // Persist to DB
        /** @var \App\Models\User $user */
       if ($user = Auth::user()) {
            $user->theme = $key;
            $user->save();
        }

        // Persist to cookie (30 days)
        Cookie::queue('filament_theme', $key, 60 * 24 * 30);

        // Tell the browser to swap CSS variables
        $this->dispatch('theme-applied', key: $key, theme: $themes[$key]);

        Notification::make()
            ->title('Theme applied: ' . $themes[$key]['label'])
            ->success()
            ->send();
    }

    /**
     * Expose all themes to the Blade view.
     */
    public function getThemesProperty(): array
    {
        return config('filament-themes', []);
    }
}