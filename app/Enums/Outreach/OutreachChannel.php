<?php

namespace App\Enums\Outreach;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum OutreachChannel: string implements HasLabel, HasColor, HasIcon {
    case LinkedInConnection = 'linkedin_connection';
    case LinkedInMessage = 'linkedin_message';
    case Email = 'email';
    case ContactForm = 'contact_form';
    case Referral = 'referral';

    public function getLabel(): string|Htmlable|null {
        return match ($this) {
            self::LinkedInConnection => 'LinkedIn Connection',
            self::LinkedInMessage => 'LinkedIn Message',
            self::Email => 'Email',
            self::ContactForm => 'Contact Form',
            self::Referral => 'Referral',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null {
        return match ($this) {
            self::LinkedInConnection => 'heroicon-o-user-plus',
            self::LinkedInMessage => 'heroicon-o-chat-bubble-left',
            self::Email => 'heroicon-o-envelope',
            self::ContactForm => 'heroicon-o-document-text',
            self::Referral => 'heroicon-o-user-group',
        };
    }

    public function getColor(): string|array|null {
        return match ($this) {
            self::LinkedInConnection => 'info',
            self::LinkedInMessage => 'primary',
            self::Email => 'success',
            self::ContactForm => 'warning',
            self::Referral => 'gray',
        };
    }
}
