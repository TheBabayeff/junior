<?php

namespace App\Filament\Widgets;

use App\Models\Anket;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Storage;

class LatestAnkets extends BaseWidget
{

    protected static ?string $model = Anket::class;
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Anket::query()->where('status', 'new')
            )
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                ,

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vacancy.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\Action::make('pdf')
                    ->label('PDF')
                    ->color('success')
                    ->url(function ($record) {
                        $pdfPath = Storage::url("{$record->pdf}");
                        return asset($pdfPath);
                    }),
            ])
            ->defaultPaginationPageOption(5);
    }
}
