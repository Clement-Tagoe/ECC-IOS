<?php

namespace App\Filament\Resources\MonitoringShiftReports;

use App\Filament\Resources\MonitoringShiftReports\Schemas\MonitoringShiftReportInfolist;
use App\Filament\Resources\MonitoringShiftReports\Pages\CreateMonitoringShiftReport;
use App\Filament\Resources\MonitoringShiftReports\Pages\EditMonitoringShiftReport;
use App\Filament\Resources\MonitoringShiftReports\Pages\ListMonitoringShiftReports;
use App\Filament\Resources\MonitoringShiftReports\Pages\ViewMonitoringShiftReport;
use App\Filament\Resources\MonitoringShiftReports\Schemas\MonitoringShiftReportForm;
use App\Filament\Resources\MonitoringShiftReports\Tables\MonitoringShiftReportsTable;
use App\Models\MonitoringShiftReport;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class MonitoringShiftReportResource extends Resource
{
    protected static ?string $model = MonitoringShiftReport::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Square3Stack3d;

    protected static string | UnitEnum | null $navigationGroup = 'Monitoring';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return MonitoringShiftReportForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MonitoringShiftReportInfolist::configure($schema);
    }


    public static function table(Table $table): Table
    {
        return MonitoringShiftReportsTable::configure($table);
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
            'index' => ListMonitoringShiftReports::route('/'),
            'create' => CreateMonitoringShiftReport::route('/create'),
            'view' => ViewMonitoringShiftReport::route('/{record}'),
            'edit' => EditMonitoringShiftReport::route('/{record}/edit'),
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
