<?php

namespace App\Filament\Resources\CommandCenterStaff;

use App\Filament\Resources\CommandCenterStaff\Pages\CreateCommandCenterStaff;
use App\Filament\Resources\CommandCenterStaff\Pages\EditCommandCenterStaff;
use App\Filament\Resources\CommandCenterStaff\Pages\ListCommandCenterStaff;
use App\Filament\Resources\CommandCenterStaff\Schemas\CommandCenterStaffForm;
use App\Filament\Resources\CommandCenterStaff\Tables\CommandCenterStaffTable;
use App\Models\CommandCenterStaff;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CommandCenterStaffResource extends Resource
{
    protected static ?string $model = CommandCenterStaff::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserPlus;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CommandCenterStaffForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CommandCenterStaffTable::configure($table);
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
            'index' => ListCommandCenterStaff::route('/'),
            'create' => CreateCommandCenterStaff::route('/create'),
            'edit' => EditCommandCenterStaff::route('/{record}/edit'),
        ];
    }
}
