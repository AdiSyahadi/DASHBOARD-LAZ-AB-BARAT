<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use App\Models\Laporan;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\TableWidget as BaseWidget;

class realwid extends BaseWidget
{
    use InteractsWithPageFilters;
    protected static ?string $heading = 'Perolehan RealTime';
    
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        // Hanya tampil di resource dan bukan di dashboard
        return !request()->routeIs('filament.pages.dashboard');
    }

    public function table(Table $table): Table
    {
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;
        $perolehanJam = $this->filters['perolehan_jam'] ?? null;
        $nama_cs = $this->filters['nama_cs'] ?? null;
        $program = $this->filters['program'] ?? null;

        return $table
            ->query(
                Laporan::when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                    ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                    ->when($perolehanJam, fn($query) => $query->where('perolehan_jam', $perolehanJam)) // Filter berdasarkan perolehan_jam
                    ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                    ->when($program, fn($query) => $query->where('program', $program))
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
