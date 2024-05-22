<?php

namespace App\Filament\Resources\ExperienceRoleResource\Pages;

use App\Filament\Resources\ExperienceRoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExperienceRole extends EditRecord
{
    protected static string $resource = ExperienceRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
