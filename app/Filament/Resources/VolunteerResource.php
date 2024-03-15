<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VacancyResource\RelationManagers\AnketsRelationManager;
use App\Filament\Resources\VolunteerResource\Pages;
use App\Filament\Resources\VolunteerResource\RelationManagers;
use App\Models\Volunteer;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Storage;

class VolunteerResource extends Resource
{
    protected static ?string $model = Volunteer::class;
    protected static ?string $label = 'Könüllü müraciətləri';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getNavigationBadge(): ?string
    {
        return static::$model::where('status', 'new')->count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('pdfCv')
                    ->directory('volunteers-cv')
                    ->downloadable()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(6)
                    ->default('new'),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(9)
                    ->default('volunteer'),
                Forms\Components\Toggle::make('is_practice')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
//               TextColumn::make('pdfCv')
//                    ->url(function ($record) {
//                        $pdfPath = Storage::url("volunteers-cv/{$record->pdfCv}");
//                        return asset($pdfPath);
//                    }),

                Tables\Columns\SelectColumn::make('status')
                ,
                Tables\Columns\IconColumn::make('is_practice')
                    ->sortable()
                    ->boolean(),
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
                        $pdfPath = Storage::url("volunteers-cv/{$record->pdfCv}");
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
            'index' => Pages\ListVolunteers::route('/'),
            'create' => Pages\CreateVolunteer::route('/create'),
            'view' => Pages\ViewVolunteer::route('/{record}'),
            'edit' => Pages\EditVolunteer::route('/{record}/edit'),
        ];
    }
}
