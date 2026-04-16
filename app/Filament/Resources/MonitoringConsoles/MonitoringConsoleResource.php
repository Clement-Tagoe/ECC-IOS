<?php

namespace App\Filament\Resources\MonitoringConsoles;

use App\Filament\Resources\MonitoringConsoles\Pages\CreateMonitoringConsole;
use App\Filament\Resources\MonitoringConsoles\Pages\EditMonitoringConsole;
use App\Filament\Resources\MonitoringConsoles\Pages\ListConsolesStatus;
use App\Filament\Resources\MonitoringConsoles\Pages\ListMonitoringConsoles;
use App\Filament\Resources\MonitoringConsoles\Schemas\MonitoringConsoleForm;
use App\Filament\Resources\MonitoringConsoles\Schemas\MonitoringConsoleInfolist;
use App\Filament\Resources\MonitoringConsoles\Tables\MonitoringConsolesTable;
use App\Models\MonitoringConsole;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class MonitoringConsoleResource extends Resource
{
    protected static ?string $model = MonitoringConsole::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedComputerDesktop;

    protected static ?string $recordTitleAttribute = 'console_name';

    protected static string | UnitEnum | null $navigationGroup = 'Monitoring';

    protected static ?string $navigationLabel = 'Monitoring Console Status';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return MonitoringConsoleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MonitoringConsolesTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MonitoringConsoleInfolist::configure($schema);
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
            'index' => ListConsolesStatus::route('/'),
            'manage' => ListMonitoringConsoles::route('/manage'),
            'create' => CreateMonitoringConsole::route('/create'),
            'edit' => EditMonitoringConsole::route('/{record}/edit'),
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
