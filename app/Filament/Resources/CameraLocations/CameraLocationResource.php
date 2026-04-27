<?php

namespace App\Filament\Resources\CameraLocations;

use App\Filament\Resources\CameraLocations\Pages\CreateCameraLocation;
use App\Filament\Resources\CameraLocations\Pages\EditCameraLocation;
use App\Filament\Resources\CameraLocations\Pages\ListCameraLocations;
use App\Filament\Resources\CameraLocations\Schemas\CameraLocationForm;
use App\Filament\Resources\CameraLocations\Tables\CameraLocationsTable;
use App\Models\CameraLocation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class CameraLocationResource extends Resource
{
    protected static ?string $model = CameraLocation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::MapPin;

    protected static ?string $recordTitleAttribute = 'name';

    protected static string | UnitEnum | null $navigationGroup = 'Others';

    public static function form(Schema $schema): Schema
    {
        return CameraLocationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CameraLocationsTable::configure($table);
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
            'index' => ListCameraLocations::route('/'),
            'create' => CreateCameraLocation::route('/create'),
            'edit' => EditCameraLocation::route('/{record}/edit'),
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
