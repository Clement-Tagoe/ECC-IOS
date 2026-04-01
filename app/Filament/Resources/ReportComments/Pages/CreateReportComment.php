<?php

namespace App\Filament\Resources\ReportComments\Pages;

use App\Filament\Resources\ReportComments\ReportCommentResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateReportComment extends CreateRecord
{
    protected static string $resource = ReportCommentResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     $data['user_id'] = Auth::id();

    //     return $data;
    // }

}
