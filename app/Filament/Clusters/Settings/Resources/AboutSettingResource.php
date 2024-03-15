<?php

namespace App\Filament\Clusters\Settings\Resources;

use App\Filament\Clusters\Settings;
use App\Filament\Clusters\Settings\Resources\AboutSettingResource\Pages;
use App\Filament\Clusters\Settings\Resources\AboutSettingResource\RelationManagers;
use App\Models\AboutSetting;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutSettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static ?string $label = 'Haqqımızda Bölməsi';
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
                Forms\Components\FileUpload::make('about_firstPhoto')
                    ->label('İlk bölmədəki şəkil')
                    ->placeholder('Şəkil ölçüsü 860x500 pixel')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('about_firstVideo')
                    ->label('İlk bölmədəki Video Link')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('about_secondPhoto')
                    ->label('İkinci  bölmədəki şəkil')
                    ->placeholder('Şəkil ölçüsü 500x670 pixel')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('about_secondVideo')
                    ->label('İkinci bölmədəki Video Link')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('about_firstPhoto')
                    ->label('İlk bölmədəki şəkil'),
                Tables\Columns\ImageColumn::make('about_secondPhoto')
                    ->label('İkinci  bölmədəki şəkil'),
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
            'index' => Pages\ListAboutSettings::route('/'),
            'create' => Pages\CreateAboutSetting::route('/create'),
            'edit' => Pages\EditAboutSetting::route('/{record}/edit'),
        ];
    }
}
