<?php

namespace App\Filament\Resources\Activities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('company_id')
                    ->relationship('company', 'name'),
                TextInput::make('subject_type')
                    ->required(),
                TextInput::make('subject_id')
                    ->required()
                    ->numeric(),
                TextInput::make('event')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('metadata')
                    ->columnSpanFull(),
            ]);
    }
}
