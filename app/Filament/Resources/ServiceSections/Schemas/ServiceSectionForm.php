<?php

namespace App\Filament\Resources\ServiceSections\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;

class ServiceSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('icon')
                    ->label('Icon (SVG Code / Image URL)')
                    ->nullable()
                    ->columnSpanFull(),

                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull()
                    ->maxLength(255),

                Repeater::make('features')
                    ->label('Features (Bullet List)')
                    ->schema([
                        TextInput::make('value')
                            ->label('Feature Text')
                            ->required(),
                    ])
                    ->default([])
                    ->afterStateHydrated(function ($component, $state) {
                        // Convert DB format: ["A", "B"] → Repeater format: [ ["value" => "A"], ... ]
                        if (is_array($state)) {
                            $component->state(
                                collect($state)
                                    ->map(fn($item) => ['value' => $item])
                                    ->toArray()
                            );
                        }
                    })
                    ->mutateDehydratedStateUsing(function ($state) {
                        // Convert repeater output: [ ["value"=>"A"], ... ] → ["A", "B"]
                        return collect($state)
                            ->pluck('value')
                            ->toArray();
                    })
                    ->collapsed(),


                TextInput::make('order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
