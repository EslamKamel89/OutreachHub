<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('job_title'),
                TextInput::make('linkedin_url')
                    ->url(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
