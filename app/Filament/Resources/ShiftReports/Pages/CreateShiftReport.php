<?php

namespace App\Filament\Resources\ShiftReports\Pages;

use App\Filament\Resources\ShiftReports\ShiftReportResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateShiftReport extends CreateRecord
{
    protected static string $resource = ShiftReportResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::id();

        return $data;
    }
}
