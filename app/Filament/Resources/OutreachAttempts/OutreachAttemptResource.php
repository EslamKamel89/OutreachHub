<?php

namespace App\Filament\Resources\OutreachAttempts;

use App\Filament\Resources\OutreachAttempts\Pages\CreateOutreachAttempt;
use App\Filament\Resources\OutreachAttempts\Pages\EditOutreachAttempt;
use App\Filament\Resources\OutreachAttempts\Pages\ListOutreachAttempts;
use App\Filament\Resources\OutreachAttempts\Schemas\OutreachAttemptForm;
use App\Filament\Resources\OutreachAttempts\Tables\OutreachAttemptsTable;
use App\Models\OutreachAttempt;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OutreachAttemptResource extends Resource
{
    protected static ?string $model = OutreachAttempt::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'subject';

    public static function form(Schema $schema): Schema
    {
        return OutreachAttemptForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OutreachAttemptsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOutreachAttempts::route('/'),
            'create' => CreateOutreachAttempt::route('/create'),
            'edit' => EditOutreachAttempt::route('/{record}/edit'),
        ];
    }
}
