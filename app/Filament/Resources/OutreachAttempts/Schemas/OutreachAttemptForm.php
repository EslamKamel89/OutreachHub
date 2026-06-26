<?php

namespace App\Filament\Resources\OutreachAttempts\Schemas;

use App\Enums\Outreach\OutreachChannel;
use App\Enums\Outreach\OutreachStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OutreachAttemptForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('contact_id')
                    ->relationship('contact', 'name')
                    ->required(),
                Select::make('channel')
                    ->options(OutreachChannel::class)
                    ->required(),
                TextInput::make('subject'),
                Textarea::make('message')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(OutreachStatus::class)
                    ->required(),
                DateTimePicker::make('sent_at'),
                DateTimePicker::make('responded_at'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
