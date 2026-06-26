<?php

namespace App\Enums\Outreach;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum OutreachStatus: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'draft';
    case Scheduled = 'scheduled';
    case Pending = 'pending';
    case Sent = 'sent';
    case Accepted = 'accepted';
    case Replied = 'replied';
    case Ignored = 'ignored';
    case Declined = 'declined';
    case Cancelled = 'cancelled';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::Draft => 'Draft',
            self::Scheduled => 'Scheduled',
            self::Pending => 'Pending',
            self::Sent => 'Sent',
            self::Accepted => 'Accepted',
            self::Replied => 'Replied',
            self::Ignored => 'Ignored',
            self::Declined => 'Declined',
            self::Cancelled => 'Cancelled',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::Draft => 'heroicon-o-pencil-square',
            self::Scheduled => 'heroicon-o-calendar-days',
            self::Pending => 'heroicon-o-clock',
            self::Sent => 'heroicon-o-paper-airplane',
            self::Accepted => 'heroicon-o-check-circle',
            self::Replied => 'heroicon-o-chat-bubble-left-right',
            self::Ignored => 'heroicon-o-eye-slash',
            self::Declined => 'heroicon-o-x-circle',
            self::Cancelled => 'heroicon-o-no-symbol',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Scheduled => 'warning',
            self::Pending => 'info',
            self::Sent => 'primary',
            self::Accepted => 'success',
            self::Replied => 'success',
            self::Ignored => 'gray',
            self::Declined => 'danger',
            self::Cancelled => 'danger',
        };
    }
}
