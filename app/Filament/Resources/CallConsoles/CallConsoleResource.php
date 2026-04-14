<?php

namespace App\Filament\Resources\CallConsoles;

use App\Filament\Resources\CallConsoles\Pages\CreateCallConsole;
use App\Filament\Resources\CallConsoles\Pages\EditCallConsole;
use App\Filament\Resources\CallConsoles\Pages\ListCallConsoles;
use App\Filament\Resources\CallConsoles\Pages\ListConsolesStatus;
use App\Filament\Resources\CallConsoles\Schemas\CallConsoleForm;
use App\Filament\Resources\CallConsoles\Tables\CallConsolesTable;
use App\Models\CallConsole;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class CallConsoleResource extends Resource
{
    protected static ?string $model = CallConsole::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ComputerDesktop;

    protected static ?string $recordTitleAttribute = 'console_name';

    protected static string | UnitEnum | null $navigationGroup = 'Call-Taking';

    protected static ?string $navigationLabel = 'Call Console Status';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return CallConsoleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CallConsolesTable::configure($table);
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
            'create' => CreateCallConsole::route('/create'),
            'edit' => EditCallConsole::route('/{record}/edit'),
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
