<?php

namespace App\Filament\Resources\ValidCaseNatures;

use App\Filament\Resources\ValidCaseNatures\Pages\CreateValidCaseNature;
use App\Filament\Resources\ValidCaseNatures\Pages\EditValidCaseNature;
use App\Filament\Resources\ValidCaseNatures\Pages\ListValidCaseNatures;
use App\Filament\Resources\ValidCaseNatures\Schemas\ValidCaseNatureForm;
use App\Filament\Resources\ValidCaseNatures\Tables\ValidCaseNaturesTable;
use App\Models\ValidCaseNature;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class ValidCaseNatureResource extends Resource
{
    protected static ?string $model = ValidCaseNature::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::TableCells;

    protected static ?string $recordTitleAttribute = 'name';

    protected static string | UnitEnum | null $navigationGroup = 'Others';

    public static function form(Schema $schema): Schema
    {
        return ValidCaseNatureForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ValidCaseNaturesTable::configure($table);
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
            'index' => ListValidCaseNatures::route('/'),
            'create' => CreateValidCaseNature::route('/create'),
            'edit' => EditValidCaseNature::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
