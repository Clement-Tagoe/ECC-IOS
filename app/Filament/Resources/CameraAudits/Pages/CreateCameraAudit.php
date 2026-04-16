<?php

namespace App\Filament\Resources\CameraAudits\Pages;

use App\Filament\Resources\CameraAudits\CameraAuditResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCameraAudit extends CreateRecord
{
    protected static string $resource = CameraAuditResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
