<?php

namespace App\Filament\Clusters\Settings\Resources\WelcomeSettingResource\Pages;

use App\Filament\Clusters\Settings\Resources\WelcomeSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWelcomeSettings extends ListRecords
{
    protected static string $resource = WelcomeSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
