<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('badge_text')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('title_primary')
                    ->required(),
                TextInput::make('title_secondary'),
                Textarea::make('description')
                    ->required()
                    ->rows(4),
                FileUpload::make('image')
                    ->image()
                    ->directory('hero')
                    ->disk('public')
                    ->visibility('public')
                    ->preserveFilenames()
            ]);
    }
}
