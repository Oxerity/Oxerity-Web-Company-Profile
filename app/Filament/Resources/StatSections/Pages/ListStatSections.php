<?php

namespace App\Filament\Resources\StatSections\Pages;

use App\Filament\Resources\StatSections\StatSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStatSections extends ListRecords
{
    protected static string $resource = StatSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
