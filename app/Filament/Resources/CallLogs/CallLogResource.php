<?php

namespace App\Filament\Resources\CallLogs;

use App\Filament\Resources\CallLogs\Pages\CreateCallLog;
use App\Filament\Resources\CallLogs\Pages\EditCallLog;
use App\Filament\Resources\CallLogs\Pages\ListCallLogs;
use App\Filament\Resources\CallLogs\Pages\ViewCallLog;
use App\Filament\Resources\CallLogs\Schemas\CallLogForm;
use App\Filament\Resources\CallLogs\Schemas\CallLogInfolist;
use App\Filament\Resources\CallLogs\Tables\CallLogsTable;
use App\Models\CallLog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class CallLogResource extends Resource
{
    protected static ?string $model = CallLog::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-phone-arrow-down-left';

    protected static ?string $recordTitleAttribute = 'incoming_calls';

    protected static string | UnitEnum | null $navigationGroup = 'Call-Taking';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return CallLogForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CallLogInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CallLogsTable::configure($table);
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
            'index' => ListCallLogs::route('/'),
            'create' => CreateCallLog::route('/create'),
            'edit' => EditCallLog::route('/{record}/edit'),
            'view' => ViewCallLog::route('/{record}'),
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
