<?php

namespace App\Filament\Resources\ShiftReports;

use App\Filament\Resources\ShiftReports\Pages\CreateShiftReport;
use App\Filament\Resources\ShiftReports\Pages\EditShiftReport;
use App\Filament\Resources\ShiftReports\Pages\ListShiftReports;
use App\Filament\Resources\ShiftReports\Schemas\ShiftReportForm;
use App\Filament\Resources\ShiftReports\Tables\ShiftReportsTable;
use App\Models\ShiftReport;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ShiftReportResource extends Resource
{
    protected static ?string $model = ShiftReport::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CalendarDays;

    protected static ?string $recordTitleAttribute = 'shift_type';

    public static function form(Schema $schema): Schema
    {
        return ShiftReportForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ShiftReportsTable::configure($table);
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
            'index' => ListShiftReports::route('/'),
            'create' => CreateShiftReport::route('/create'),
            'edit' => EditShiftReport::route('/{record}/edit'),
        ];
    }
}
