<?php

namespace App\Filament\Resources\Tasks\Schemas;

use App\Enums\Task\TaskPriority;
use App\Enums\Task\TaskStatus;
use App\Enums\Task\TaskType;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TaskForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('contact_id')
                    ->relationship('contact', 'name')
                    ->required(),
                Select::make('type')
                    ->options(TaskType::class)
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('notes')
                    ->columnSpanFull(),
                DateTimePicker::make('due_at'),
                DateTimePicker::make('completed_at'),
                Select::make('priority')
                    ->options(TaskPriority::class)
                    ->required(),
                Select::make('status')
                    ->options(TaskStatus::class)
                    ->required(),
            ]);
    }
}
