<?php

namespace App\Filament\Resources\Companies\Schemas;

use App\Enums\Company\OpportunityStage;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('city_id')
                    ->relationship('city', 'name')
                    ->required(),
                Select::make('industry_id')
                    ->relationship('industry', 'name'),
                Select::make('opportunity_stage')
                    ->options(OpportunityStage::class)
                    ->default('not_contacted')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('website')
                    ->url(),
                TextInput::make('linkedin_url')
                    ->url(),
                TextInput::make('careers_url')
                    ->url(),
                TextInput::make('employee_count')
                    ->numeric(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('source'),
                Textarea::make('notes')
                    ->columnSpanFull(),
                Toggle::make('is_hiring')
                    ->required(),
            ]);
    }
}
