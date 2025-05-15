<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaResource\Pages;
use App\Models\Pengguna;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

class PenggunaResource extends Resource
{
    protected static ?string $model = Pengguna::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Kelola';



    // Form untuk menambahkan dan mengedit pengguna
    public static function form(Form $form): Form
    {
        return $form->schema([
            // Input untuk nama pengguna
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Nama Pengguna')
                ->maxLength(255),

            // Input untuk email
            Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->unique()
                ->label('Email')
                ->maxLength(255),

            // Input untuk password
            Forms\Components\TextInput::make('password')
                ->required()
                ->password()
                ->label('Password'),

            // Input untuk tinggi badan
            Forms\Components\TextInput::make('tinggi_badan')
                ->nullable()
                ->label('Tinggi Badan'),

            // Input untuk berat badan
            Forms\Components\TextInput::make('berat_badan')
                ->nullable()
                ->label('Berat Badan'),

            // Input untuk upload foto
            FileUpload::make('photo')
                ->disk('public') // Menggunakan disk public untuk menyimpan file
                ->label('Foto Pengguna')
                ->image() // Membatasi file yang diupload hanya gambar
                ->nullable(),
        ]);
    }

    // Table untuk menampilkan data pengguna
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk nama pengguna
                TextColumn::make('name')->label('Nama')->sortable(),

                // Kolom untuk email
                TextColumn::make('email')->label('Email')->sortable(),

                // Kolom untuk foto pengguna
                ImageColumn::make('photo')->label('Foto')->disk('public'),

                // Kolom untuk tinggi badan
                TextColumn::make('tinggi_badan')->label('Tinggi Badan'),

                // Kolom untuk berat badan
                TextColumn::make('berat_badan')->label('Berat Badan'),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Aksi edit
            ])
            ->bulkActions([
                // Aksi untuk bulk delete
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Definisikan hubungan dengan model lain jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenggunas::route('/'),
            'create' => Pages\CreatePengguna::route('/create'),
            'edit' => Pages\EditPengguna::route('/{record}/edit'),
        ];
    }
}
