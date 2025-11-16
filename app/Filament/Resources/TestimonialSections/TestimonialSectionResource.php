<?php

namespace App\Filament\Resources\TestimonialSections;

use App\Filament\Resources\TestimonialSections\Pages\CreateTestimonialSection;
use App\Filament\Resources\TestimonialSections\Pages\EditTestimonialSection;
use App\Filament\Resources\TestimonialSections\Pages\ListTestimonialSections;
use App\Filament\Resources\TestimonialSections\Schemas\TestimonialSectionForm;
use App\Filament\Resources\TestimonialSections\Tables\TestimonialSectionsTable;
use App\Models\TestimonialSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TestimonialSectionResource extends Resource
{
    protected static ?string $model = TestimonialSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TestimonialSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestimonialSectionsTable::configure($table);
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
            'index' => ListTestimonialSections::route('/'),
            'create' => CreateTestimonialSection::route('/create'),
            'edit' => EditTestimonialSection::route('/{record}/edit'),
        ];
    }
}
