<?php

namespace App\Filament\Clusters\Settings\Resources;

use App\Filament\Clusters\Settings;
use App\Filament\Clusters\Settings\Resources\WelcomeSettingResource\Pages;
use App\Filament\Clusters\Settings\Resources\WelcomeSettingResource\RelationManagers;
use App\Models\Setting;
use App\Models\WelcomeSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WelcomeSettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $label = 'Ana Səhifə Tənzimləmələri';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = Settings::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('welcome_greenText')
                    ->label('Yaşıl yazı'),
                Forms\Components\TextInput::make('welcome_mainText')
                    ->label('Əsas yazı'),
                Forms\Components\TextInput::make('welcome_descriptionText')
                    ->label('Paraqraf yazı'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('welcome_mainText')
                    ->label('Ana səhifə Yazısı'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWelcomeSettings::route('/'),
            'create' => Pages\CreateWelcomeSetting::route('/create'),
            'edit' => Pages\EditWelcomeSetting::route('/{record}/edit'),
        ];
    }
}
