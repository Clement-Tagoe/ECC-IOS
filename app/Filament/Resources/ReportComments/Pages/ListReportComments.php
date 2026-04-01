<?php

namespace App\Filament\Resources\ReportComments\Pages;

use App\Filament\Resources\ReportComments\ReportCommentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReportComments extends ListRecords
{
    protected static string $resource = ReportCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
