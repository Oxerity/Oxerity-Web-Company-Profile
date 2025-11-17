<?php

namespace App\Filament\Resources\AboutSections\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;

class AboutSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('badge_text')
                ->required(),

            TextInput::make('title')
                ->required(),

            Textarea::make('description')
                ->rows(4)
                ->required(),

            FileUpload::make('main_image')
                ->image()
                ->directory('about')
                ->disk('public')
                ->visibility('public')
                ->preserveFilenames()
                ->required(),

            TextInput::make('experience_years')
                ->required(),

            TextInput::make('experience_label')
                ->required(),

            Repeater::make('features')
                ->schema([
                    TextInput::make('title')->required(),
                    TextInput::make('subtitle')->required(),
                    Select::make('icon_type')
                        ->options([
                            'check-circle' => 'Check',
                            'lightning-bolt' => 'Lightning',
                            'shield-check' => 'Shield',
                            'star' => 'Star',
                        ]),
                    Select::make('color')
                        ->options([
                            'sky' => 'Sky',
                            'green' => 'Green',
                            'purple' => 'Purple',
                            'orange' => 'Orange',
                            'red' => 'Red',
                            'teal' => 'Teal',
                        ]),
                ])
                ->columnSpanFull()
                ->collapsible()
                ->default([]),
        ]);
    }
}
