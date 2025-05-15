<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AirResource\Pages;
use App\Filament\Resources\AirResource\RelationManagers;
use App\Models\Air;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AirResource extends Resource
{
    protected static ?string $model = Air::class;

    protected static ?string $navigationGroup = 'Manajemen';
    // protected static ?string $navigationIcon = 'heroicon-o-droplet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Keterangan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('banyak_air(ml)')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('waktu_minum')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Keterangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('banyak_air(ml)')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waktu_minum'),
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
            'index' => Pages\ListAirs::route('/'),
            'create' => Pages\CreateAir::route('/create'),
            'edit' => Pages\EditAir::route('/{record}/edit'),
        ];
    }
    
}
