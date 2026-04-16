<?php

namespace App\Filament\Resources\MonitoringStaff;

use App\Filament\Resources\MonitoringStaff\Pages\CreateMonitoringStaff;
use App\Filament\Resources\MonitoringStaff\Pages\EditMonitoringStaff;
use App\Filament\Resources\MonitoringStaff\Pages\ListMonitoringStaff;
use App\Filament\Resources\MonitoringStaff\Schemas\MonitoringStaffForm;
use App\Filament\Resources\MonitoringStaff\Schemas\MonitoringStaffInfolist;
use App\Filament\Resources\MonitoringStaff\Tables\MonitoringStaffTable;
use App\Models\MonitoringStaff;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class MonitoringStaffResource extends Resource
{
    protected static ?string $model = MonitoringStaff::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserCircle;

    protected static ?string $recordTitleAttribute = 'name';

    protected static string | UnitEnum | null $navigationGroup = 'Monitoring';

    protected static ?string $navigationLabel = 'Monitoring Staff';

    protected static ?int $navigationSort = 4;


    public static function form(Schema $schema): Schema
    {
        return MonitoringStaffForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MonitoringStaffTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MonitoringStaffInfolist::configure($schema);
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
            'index' => ListMonitoringStaff::route('/'),
            'create' => CreateMonitoringStaff::route('/create'),
            'edit' => EditMonitoringStaff::route('/{record}/edit'),
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
