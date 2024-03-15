<?php

namespace App\Filament\Clusters\Settings\Resources\WelcomeSettingResource\Pages;

use App\Filament\Clusters\Settings\Resources\WelcomeSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWelcomeSetting extends CreateRecord
{
    protected static string $resource = WelcomeSettingResource::class;
}
