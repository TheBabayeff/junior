<?php

namespace App\Filament\Clusters\Settings\Resources\AboutSettingResource\Pages;

use App\Filament\Clusters\Settings\Resources\AboutSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutSetting extends EditRecord
{
    protected static string $resource = AboutSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
