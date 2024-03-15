<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnketResource\Pages;
use App\Filament\Resources\AnketResource\RelationManagers;
use App\Models\Anket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class AnketResource extends Resource
{
    protected static ?string $model = Anket::class;
    protected static ?string $label = 'Anketlər(Vakansiya)';

    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 'new')->count();
    }

    public static function canCreate(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //Forms\Components\Repeater::make('vacancy_id'),
                Forms\Components\TextInput::make('vacancy_id')
                    ->numeric(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photo')
                    ->directory('ankets-photos'),
                Forms\Components\FileUpload::make('pdf')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ,
                Tables\Columns\TextColumn::make('vacancy.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('pdf')
                    ->label('PDF')
                    ->color('success')
                    ->url(function ($record) {
                        $pdfPath = Storage::url("{$record->pdf}");
                        return asset($pdfPath);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnkets::route('/'),
            'create' => Pages\CreateAnket::route('/create'),
            'view' => Pages\ViewAnket::route('/{record}'),
            'edit' => Pages\EditAnket::route('/{record}/edit'),
        ];
    }
}
