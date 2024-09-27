<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporansResource\Pages;
use App\Filament\Resources\LaporansResource\RelationManagers;
use App\Models\Laporans;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaporansResource extends Resource
{
    protected static ?string $model = Laporans::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'DATA REALTIME LAPORAN';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id'),
                TextInput::make('tanggal'),
                TextInput::make('nama_cs'),
                TextInput::make('program'),
                TextInput::make('perolehan_jam'),
                TextInput::make('jml_database'),
                TextInput::make('jml_perolehan'),
                TextInput::make('nama_donatur'),
                TextInput::make('no_hp'),
                TextInput::make('prg_cross_selling'),
                TextInput::make('nama_produk'),
                TextInput::make('created_at')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('tanggal'),
                TextColumn::make('nama_cs')->searchable(),
                TextColumn::make('program')->searchable(),
                TextColumn::make('perolehan_jam'),
                TextColumn::make('jml_database'),
                TextColumn::make('jml_perolehan'),
                TextColumn::make('nama_donatur'),
                TextColumn::make('no_hp'),
                TextColumn::make('prg_cross_selling'),
                TextColumn::make('nama_produk'),
                TextColumn::make('created_at')
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
            'index' => Pages\ListLaporans::route('/'),
            'create' => Pages\CreateLaporans::route('/create'),
            'edit' => Pages\EditLaporans::route('/{record}/edit'),
        ];
    }
}
