<?php

namespace App\Filament\Resources\CallConsoles\Pages;

use App\Enums\ConsoleStatus;
use App\Filament\Resources\CallConsoles\CallConsoleResource;
use App\Models\CallConsole;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\Page;

class ListConsolesStatus extends Page
{

    protected static string $resource = CallConsoleResource::class;

    protected string $view = 'filament.resources.call-consoles.pages.list-consoles-status';
    
    public function getTitle(): string
    {
        return 'Call Consoles Status';
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create')
                ->label('Add Console')
                ->icon('heroicon-o-plus')
                ->url(CallConsoleResource::getUrl('create')),
            Action::make('manage')
                ->label('Manage Consoles')
                ->icon('heroicon-o-cog')
                ->url(CallConsoleResource::getUrl('manage')),
        ];
    }

    public function getConsoles()
    {
        return CallConsole::all();
    }

    public function editAction(): Action
    {
       return Action::make('edit')
                ->icon('heroicon-m-pencil-square')
                ->color('gray')
                ->record(fn (array $arguments) => CallConsole::find($arguments['console']))
                ->fillForm(fn (CallConsole $record): array => [
                    'console_name' => $record->console_name,
                    'status' => $record->status,
                    'call_staff_id' => $record->call_staff_id,
                ])
                ->schema([
                    TextInput::make('console_name')
                            ->unique()
                            ->required()
                            ->disabled(),
                        ToggleButtons::make('status')
                            ->options(ConsoleStatus::class)
                            ->inline()
                            ->required()
                            ->live()
                            ->default(ConsoleStatus::Operational)
                            ->disabled(),
                        Select::make('call_staff_id')
                            ->relationship('assignee', 'name')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->nullable()
                            ->placeholder('Unassigned'),
                ])
                ->action(function (array $data, CallConsole $record):void {
                    $record->update($data);
                });
    }
}
