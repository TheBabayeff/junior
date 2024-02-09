<?php

namespace App\Filament\Resources\AnketResource\Pages;

use App\Filament\Resources\AnketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnket extends EditRecord
{
    protected static string $resource = AnketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
