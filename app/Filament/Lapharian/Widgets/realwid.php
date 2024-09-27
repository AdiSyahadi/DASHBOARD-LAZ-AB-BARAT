<?php

namespace App\Filament\Lapharian\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use App\Models\Laporan;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Concerns\HasFiltersForm;
use Filament\Widgets\TableWidget as BaseWidget;

class realwid extends BaseWidget
{
    use InteractsWithPageFilters;
    
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        // Hanya tampil di resource dan bukan di dashboard
        return !request()->routeIs('filament.pages.dashboard');
    }
    public function table(Table $table): Table
    {
        $start = $this->filters['created_at'];
        $end = $this->filters['updated_at'];
        return $table
            ->query(
                Laporan::when($start, fn($query) => $query->whereDate('tanggal', '>', $start))
                        ->when($end, fn($query) => $query->whereDate('tanggal', '<', $end))
            )
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('tanggal'),
                Tables\Columns\TextColumn::make('nama_cs')->searchable(),
                Tables\Columns\TextColumn::make('program')->searchable(),
                Tables\Columns\TextColumn::make('perolehan_jam'),
                Tables\Columns\TextColumn::make('jml_database'),
                Tables\Columns\TextColumn::make('jml_perolehan'),
                Tables\Columns\TextColumn::make('nama_donatur'),
                Tables\Columns\TextColumn::make('no_hp'),
                Tables\Columns\TextColumn::make('prg_cross_selling'),
                Tables\Columns\TextColumn::make('nama_produk'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
