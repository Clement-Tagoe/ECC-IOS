<?php

namespace App\Filament\Resources\CallShiftReports\Pages;

use App\Filament\Resources\CallShiftReports\CallShiftReportResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCallShiftReport extends CreateRecord
{
    protected static string $resource = CallShiftReportResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }
}
