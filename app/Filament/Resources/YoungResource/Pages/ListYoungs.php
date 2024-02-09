<?php

namespace App\Filament\Resources\YoungResource\Pages;

use App\Filament\Resources\YoungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYoungs extends ListRecords
{
    protected static string $resource = YoungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
