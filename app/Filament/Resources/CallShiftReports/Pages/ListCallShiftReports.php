<?php

namespace App\Filament\Resources\CallShiftReports\Pages;

use App\Filament\Resources\CallShiftReports\CallShiftReportResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCallShiftReports extends ListRecords
{
    protected static string $resource = CallShiftReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
