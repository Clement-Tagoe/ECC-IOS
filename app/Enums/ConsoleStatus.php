<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum ConsoleStatus: string implements HasColor, HasIcon, HasLabel
{
    case Operational = 'operational';

    case Maintenance = 'maintenance';

    case Faulty = 'faulty';

    

    public function getLabel(): string
    {
        return match ($this) {
            self::Operational => 'Operational',
            self::Maintenance => 'Maintenance',
            self::Faulty => 'Faulty',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Operational => 'secondary',
            self::Maintenance => 'primary',
            self::Faulty => 'auxiliary',
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::Operational => Heroicon::ChartBar,
            self::Maintenance => Heroicon::Wrench,
            self::Faulty => Heroicon::ExclamationTriangle,
        };
    }
}