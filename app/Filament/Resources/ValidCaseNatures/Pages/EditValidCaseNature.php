<?php

namespace App\Filament\Resources\ValidCaseNatures\Pages;

use App\Filament\Resources\ValidCaseNatures\ValidCaseNatureResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditValidCaseNature extends EditRecord
{
    protected static string $resource = ValidCaseNatureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
