<?php

namespace App\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use Filament\Support\Colors\Color;
use Filament\Enums\ThemeMode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

/**
 * ApplyFilamentTheme Middleware
 * ------------------------------
 * Reads the user's saved theme choice (DB → cookie fallback)
 * and registers the correct colours on every Filament page load.
 *
 * REGISTER IN: app/Providers/Filament/AdminPanelProvider.php
 *
 *   ->middleware([
 *       \App\Http\Middleware\ApplyFilamentTheme::class,
 *   ])
 */
class ApplyFilamentTheme
{
    public function handle(Request $request, Closure $next): mixed
    {
        $key = Auth::user()?->theme
            ?? Cookie::get('filament_theme', 'ocean-depths');

        $themes = config('filament-themes', []);
        $theme  = $themes[$key] ?? $themes['ocean-depths'] ?? null;

        if ($theme) {
            Filament::getCurrentPanel()?->colors([
                'primary' => Color::hex($theme['primary']),
                'gray'    => Color::hex($theme['gray']),
            ]);

            // Force dark mode for dark-family themes
            if (! empty($theme['dark'])) {
                Filament::getCurrentPanel()
                    ?->defaultThemeMode(ThemeMode::Dark);
            }
        }

        return $next($request);
    }
}
