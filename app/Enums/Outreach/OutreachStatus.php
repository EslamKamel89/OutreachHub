<?php

namespace App\Enums\Outreach;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum OutreachStatus: string implements HasLabel, HasColor, HasIcon {
    case Draft = 'draft';
    case Sent = 'sent';
    case Replied = 'replied';
    case NoResponse = 'no_response';
    case Rejected = 'rejected';

    public function getLabel(): string|Htmlable|null {
        return match ($this) {
            self::Draft => 'Draft',
            self::Sent => 'Sent',
            self::Replied => 'Replied',
            self::NoResponse => 'No Response',
            self::Rejected => 'Rejected',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null {
        return match ($this) {
            self::Draft => 'heroicon-o-pencil-square',
            self::Sent => 'heroicon-o-paper-airplane',
            self::Replied => 'heroicon-o-chat-bubble-left-right',
            self::NoResponse => 'heroicon-o-clock',
            self::Rejected => 'heroicon-o-x-circle',
        };
    }

    public function getColor(): string|array|null {
        return match ($this) {
            self::Draft => 'gray',
            self::Sent => 'info',
            self::Replied => 'success',
            self::NoResponse => 'warning',
            self::Rejected => 'danger',
        };
    }
}
