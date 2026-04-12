<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum ShiftType: string implements HasColor, HasIcon, HasLabel
{
    case Morning = 'morning';

    case Afternoon = 'afternoon';

    case Day = 'day';

    case Night = 'night';

    public function getLabel(): string
    {
        return match ($this) {
            self::Morning => 'Morning',
            self::Afternoon => 'Afternoon',
            self::Day => 'Day',
            self::Night => 'Night',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Morning => 'info',
            self::Afternoon => 'warning',
            self::Day => 'success',
            self::Night => 'gray',
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::Morning => Heroicon::Cloud,
            self::Afternoon => Heroicon::Sun,
            self::Day => Heroicon::Sun,
            self::Night => Heroicon::Moon,
        };
    }
}