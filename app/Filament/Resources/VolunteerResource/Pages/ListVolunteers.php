<?php

namespace App\Filament\Resources\VolunteerResource\Pages;

use App\Filament\Resources\VolunteerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\TextColumn;

class ListVolunteers extends ListRecords
{
    protected static string $resource = VolunteerResource::class;



    protected function getHeaderActions(): array
    {

        return [
            Actions\CreateAction::make(),
        ];
    }
}
