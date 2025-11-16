<?php

namespace App\Filament\Resources\StatSections;

use App\Filament\Resources\StatSections\Pages\CreateStatSection;
use App\Filament\Resources\StatSections\Pages\EditStatSection;
use App\Filament\Resources\StatSections\Pages\ListStatSections;
use App\Filament\Resources\StatSections\Schemas\StatSectionForm;
use App\Filament\Resources\StatSections\Tables\StatSectionsTable;
use App\Models\StatSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StatSectionResource extends Resource
{
    protected static ?string $model = StatSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return StatSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStatSections::route('/'),
            'create' => CreateStatSection::route('/create'),
            'edit' => EditStatSection::route('/{record}/edit'),
        ];
    }
}
