<?php

namespace App\Filament\Resources\StatSections\Pages;

use App\Filament\Resources\StatSections\StatSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStatSection extends EditRecord
{
    protected static string $resource = StatSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
