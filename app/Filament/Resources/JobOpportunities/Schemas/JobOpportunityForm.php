<?php

namespace App\Filament\Resources\JobOpportunities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JobOpportunityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('url')
                    ->url(),
                Toggle::make('remote')
                    ->required(),
                TextInput::make('salary_min')
                    ->numeric(),
                TextInput::make('salary_max')
                    ->numeric(),
                TextInput::make('currency'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
