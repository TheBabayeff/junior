<?php

namespace App\Filament\Resources\AnketResource\Pages;

use App\Filament\Resources\AnketResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAnket extends ViewRecord
{
    protected static string $resource = AnketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
