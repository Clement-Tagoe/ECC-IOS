<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum CameraStatus: string implements HasColor, HasIcon, HasLabel
{
    case Online = 'online';

    case Offline = 'offline';

    public function getLabel(): string
    {
        return match ($this) {
            self::Online => 'Online',
            self::Offline => 'Offline',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Online => 'success',
            self::Offline => 'danger',
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::Online => Heroicon::CheckCircle,
            self::Offline => Heroicon::XCircle,
        };
    }
}