<?php

namespace App\Enums\Outreach;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum OutreachChannel: string implements HasColor, HasIcon, HasLabel
{
    case LinkedInComment = 'linkedin_comment';
    case LinkedInReaction = 'linkedin_reaction';
    case LinkedInConnection = 'linkedin_connection';
    case LinkedInMessage = 'linkedin_message';
    case Email = 'email';
    case ContactForm = 'contact_form';
    case Referral = 'referral';

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::LinkedInComment => 'LinkedIn Comment',
            self::LinkedInReaction => 'LinkedIn Reaction',
            self::LinkedInConnection => 'LinkedIn Connection',
            self::LinkedInMessage => 'LinkedIn Message',
            self::Email => 'Email',
            self::ContactForm => 'Contact Form',
            self::Referral => 'Referral',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::LinkedInComment => 'heroicon-o-chat-bubble-left-ellipsis',
            self::LinkedInReaction => 'heroicon-o-hand-thumb-up',
            self::LinkedInConnection => 'heroicon-o-user-plus',
            self::LinkedInMessage => 'heroicon-o-chat-bubble-left-right',
            self::Email => 'heroicon-o-envelope',
            self::ContactForm => 'heroicon-o-document-text',
            self::Referral => 'heroicon-o-share',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::LinkedInComment => 'info',
            self::LinkedInReaction => 'gray',
            self::LinkedInConnection => 'primary',
            self::LinkedInMessage => 'success',
            self::Email => 'warning',
            self::ContactForm => 'info',
            self::Referral => 'success',
        };
    }
}
