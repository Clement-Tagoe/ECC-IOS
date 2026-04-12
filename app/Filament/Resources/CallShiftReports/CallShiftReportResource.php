<?php

namespace App\Filament\Resources\CallShiftReports;

use App\Filament\Resources\CallShiftReports\Schemas\CallShiftReportInfolist;
use App\Filament\Resources\CallShiftReports\Pages\CreateCallShiftReport;
use App\Filament\Resources\CallShiftReports\Pages\EditCallShiftReport;
use App\Filament\Resources\CallShiftReports\Pages\ListCallShiftReports;
use App\Filament\Resources\CallShiftReports\Pages\ViewCallShiftReport;
use App\Filament\Resources\CallShiftReports\Schemas\CallShiftReportForm;
use App\Filament\Resources\CallShiftReports\Tables\CallShiftReportsTable;
use App\Models\CallShiftReport;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class CallShiftReportResource extends Resource
{
    protected static ?string $model = CallShiftReport::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Square3Stack3d;

    protected static ?string $recordTitleAttribute = '';

    protected static string | UnitEnum | null $navigationGroup = 'Call-Taking';

    public static function form(Schema $schema): Schema
    {
        return CallShiftReportForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CallShiftReportInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CallShiftReportsTable::configure($table);
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
            'index' => ListCallShiftReports::route('/'),
            'create' => CreateCallShiftReport::route('/create'),
            'view' => ViewCallShiftReport::route('/{record}'),
            'edit' => EditCallShiftReport::route('/{record}/edit'),
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
