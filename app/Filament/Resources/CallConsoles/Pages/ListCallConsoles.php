<?php

namespace App\Filament\Resources\CallConsoles\Pages;

use App\Filament\Resources\CallConsoles\CallConsoleResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCallConsoles extends ListRecords
{
    protected static string $resource = CallConsoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            Action::make('view')
                ->label('View Consoles')
                ->icon('heroicon-o-eye')
                ->url(CallConsoleResource::getUrl('index')),
        ];
    }
}
