<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum TaskStatus: string implements HasColor, HasIcon, HasLabel
{

    case InProgress = 'in_progress';

    case Completed = 'completed';

    case InReview = 'in_review';

    case Reviewed = 'reviewed';

    case Cancelled = 'cancelled';

    public function getLabel(): string
    {
        return match ($this) {
            self::InProgress => 'In Progress',
            self::Completed => 'Completed',
            self::InReview => 'In Review',
            self::Reviewed => 'Reviewed',
            self::Cancelled => 'Cancelled',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::InProgress => 'warning',
            self::Completed => 'success',
            self::InReview => 'primary',
            self::Reviewed => 'success',
            self::Cancelled => 'danger',
        };
    }

    public function getIcon(): Heroicon
    {
        return match ($this) {
            self::InProgress => Heroicon::ArrowPath,
            self::Completed => Heroicon::CheckCircle,
            self::InReview => Heroicon::Eye,
            self::Reviewed => Heroicon::CheckCircle,
            self::Cancelled => Heroicon::XCircle,
        };
    }
}