<?php

namespace App\Filament\Resources\StatSections\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StatSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
