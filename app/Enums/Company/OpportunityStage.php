<?php

namespace App\Enums\Company;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum OpportunityStage: string implements HasLabel, HasColor, HasIcon {
    case NotContacted = 'not_contacted';
    case Contacted = 'contacted';
    case Connected = 'connected';
    case Replied = 'replied';
    case Screening = 'screening';
    case TechnicalInterview = 'technical_interview';
    case FinalInterview = 'final_interview';
    case Offer = 'offer';
    case Rejected = 'rejected';
    case Hired = 'hired';

    public function getLabel(): string|Htmlable|null {
        return match ($this) {
            self::NotContacted => 'Not Contacted',
            self::Contacted => 'Contacted',
            self::Connected => 'Connected',
            self::Replied => 'Replied',
            self::Screening => 'Screening',
            self::TechnicalInterview => 'Technical Interview',
            self::FinalInterview => 'Final Interview',
            self::Offer => 'Offer',
            self::Rejected => 'Rejected',
            self::Hired => 'Hired',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null {
        return match ($this) {
            self::NotContacted => 'heroicon-o-building-office',
            self::Contacted => 'heroicon-o-paper-airplane',
            self::Connected => 'heroicon-o-user-plus',
            self::Replied => 'heroicon-o-chat-bubble-left-right',
            self::Screening => 'heroicon-o-phone',
            self::TechnicalInterview => 'heroicon-o-code-bracket',
            self::FinalInterview => 'heroicon-o-users',
            self::Offer => 'heroicon-o-document-check',
            self::Rejected => 'heroicon-o-x-circle',
            self::Hired => 'heroicon-o-trophy',
        };
    }

    public function getColor(): string|array|null {
        return match ($this) {
            self::NotContacted => 'gray',
            self::Contacted => 'info',
            self::Connected => 'primary',
            self::Replied => 'success',
            self::Screening => 'warning',
            self::TechnicalInterview => 'warning',
            self::FinalInterview => 'warning',
            self::Offer => 'success',
            self::Rejected => 'danger',
            self::Hired => 'success',
        };
    }
}
