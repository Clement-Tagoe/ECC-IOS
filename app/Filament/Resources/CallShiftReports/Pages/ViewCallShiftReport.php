<?php

namespace App\Filament\Resources\CallShiftReports\Pages;

use App\Filament\Resources\CallShiftReports\CallShiftReportResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCallShiftReport extends ViewRecord
{
    protected static string $resource = CallShiftReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
