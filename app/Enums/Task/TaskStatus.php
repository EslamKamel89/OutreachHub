<?php

namespace App\Enums\Task;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum TaskStatus: string implements HasColor, HasIcon, HasLabel
{
    case Pending = 'pending';
    case Waiting = 'waiting';
    case Completed = 'completed';
    case Skipped = 'skipped';
    case Cancelled = 'cancelled';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Waiting => 'Waiting',
            self::Completed => 'Completed',
            self::Skipped => 'Skipped',
            self::Cancelled => 'Cancelled',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::Pending => 'heroicon-o-clock',
            self::Waiting => 'heroicon-o-pause-circle',
            self::Completed => 'heroicon-o-check-circle',
            self::Skipped => 'heroicon-o-forward',
            self::Cancelled => 'heroicon-o-x-circle',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Waiting => 'info',
            self::Completed => 'success',
            self::Skipped => 'gray',
            self::Cancelled => 'danger',
        };
    }
}
