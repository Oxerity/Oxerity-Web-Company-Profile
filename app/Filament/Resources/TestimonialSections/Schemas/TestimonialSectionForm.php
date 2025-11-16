<?php

namespace App\Filament\Resources\TestimonialSections\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class TestimonialSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('role')
                    ->label('Profession / Position')
                    ->required(),

                Textarea::make('message')
                    ->label('Testimony Message')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),

                TextInput::make('rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5)
                    ->label('Rating (1–5)'),

                FileUpload::make('avatar')
                    ->label('Profile Picture')
                    ->image()
                    ->directory('testimonials')
                    ->disk('public')
                    ->visibility('public')
                    ->preserveFilenames(),

                TextInput::make('order')
                    ->numeric()
                    ->default(1),
            ]);
    }
}
