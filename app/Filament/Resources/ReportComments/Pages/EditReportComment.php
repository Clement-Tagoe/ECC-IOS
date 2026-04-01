<?php

namespace App\Filament\Resources\ReportComments\Pages;

use App\Filament\Resources\ReportComments\ReportCommentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReportComment extends EditRecord
{
    protected static string $resource = ReportCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
