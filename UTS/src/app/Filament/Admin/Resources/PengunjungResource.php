<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PengunjungResource\Pages;
use App\Filament\Admin\Resources\PengunjungResource\RelationManagers;
use App\Models\Pengunjung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengunjungResource extends Resource
{
    protected static ?string $model = Pengunjung::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_buku')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('judul_buku')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_pinjam')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_kembali')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_buku')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul_buku')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pinjam')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_kembali')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListPengunjungs::route('/'),
            'create' => Pages\CreatePengunjung::route('/create'),
            'edit' => Pages\EditPengunjung::route('/{record}/edit'),
        ];
    }
}
