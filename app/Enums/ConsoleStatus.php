<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum ConsoleStatus: string implements HasColor, HasIcon, HasLabel
{
    case Operational = 'operational';

    case Faulty = 'faulty';

    case Maintenance = 'maintenance';

    public function getLabel(): string
    {
        return match ($this) {
            self::Operational => 'Operational',
            self::Faulty => 'Faulty',
            self::Maintenance => 'Maintenance',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Operational => 'success',
            self::Faulty => 'danger',
            self::Maintenance => 'warning',
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::Operational => Heroicon::ChartBar,
            self::Faulty => Heroicon::ExclamationTriangle,
            self::Maintenance => Heroicon::Wrench,
        };
    }
}