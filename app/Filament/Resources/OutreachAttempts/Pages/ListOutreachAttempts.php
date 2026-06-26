<?php

namespace App\Filament\Resources\OutreachAttempts\Pages;

use App\Filament\Resources\OutreachAttempts\OutreachAttemptResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOutreachAttempts extends ListRecords
{
    protected static string $resource = OutreachAttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
