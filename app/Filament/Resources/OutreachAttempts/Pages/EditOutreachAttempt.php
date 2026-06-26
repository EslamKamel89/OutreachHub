<?php

namespace App\Filament\Resources\OutreachAttempts\Pages;

use App\Filament\Resources\OutreachAttempts\OutreachAttemptResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOutreachAttempt extends EditRecord
{
    protected static string $resource = OutreachAttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
