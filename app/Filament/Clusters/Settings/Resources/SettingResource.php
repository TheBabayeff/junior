<?php

namespace App\Filament\Clusters\Settings\Resources;

use App\Filament\Clusters\Settings;
use App\Filament\Clusters\Settings\Resources\SettingResource\Pages;
use App\Filament\Clusters\Settings\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $label = 'Ümumi Tənzimləmələr';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Settings::class;

    // Yaratma əməliyyatını qadağan et
    public static function canCreate(): bool
    {
        return false;
    }

    // Silmə əməliyyatını qadağan et
    public static function canDeleteAny(): bool
    {
        return false;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('main_firstPhone')
                   ->label('Telefon nömrəsi'),
                Forms\Components\TextInput::make('main_secondPhone')
                   ->label('Telefon nömrəsi 2'),
                Forms\Components\TextInput::make('main_addressFirst'),
                Forms\Components\TextInput::make('main_addressSecond'),






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('main_firstPhone')
                    ->label('Telefon nömrəsi'),
                Tables\Columns\TextColumn::make('main_secondPhone')
                    ->label('Telefon nömrəsi 2'),

                Tables\Columns\TextColumn::make('main_addressFirst')
                    ->label('Ünvan'),
                Tables\Columns\TextColumn::make('main_addressSecond')
                    ->label('Ünvan 2'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
