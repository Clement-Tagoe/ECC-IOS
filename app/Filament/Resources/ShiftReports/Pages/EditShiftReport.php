<?php

namespace App\Filament\Resources\ShiftReports\Pages;

use App\Filament\Resources\ShiftReports\ShiftReportResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditShiftReport extends EditRecord
{
    protected static string $resource = ShiftReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
