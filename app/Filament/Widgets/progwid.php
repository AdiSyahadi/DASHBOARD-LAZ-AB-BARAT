<?php

namespace App\Filament\Widgets;

use App\Models\Laporan;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class progwid extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;
        $perolehan_jam = $this->filters['perolehan_jam'] ?? null;
        $nama_cs = $this->filters['nama_cs'] ?? null;
        $program = $this->filters['program'] ?? null; // Tambahkan nama_cs filter

        return [
            Stat::make('', 'Rp' . number_format(Laporan:: 
                when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                ->when($perolehan_jam, fn($query) => $query->where('perolehan_jam', $perolehan_jam)) // Filter berdasarkan perolehan_jam
                ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                ->when($program, fn($query) => $query->where('program', $program)) // Tambahkan filter nama_cs
                ->where('program', 'CABANG')
                ->sum('jml_perolehan'), 0, ',', '.'))
            ->description('CABANG')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('', 'Rp' . number_format(Laporan:: 
                when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                ->when($perolehan_jam, fn($query) => $query->where('perolehan_jam', $perolehan_jam)) // Filter berdasarkan perolehan_jam
                ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                ->when($program, fn($query) => $query->where('program', $program)) // Tambahkan filter nama_cs
                ->where('program', 'PRODUK')
                ->sum('jml_perolehan'), 0, ',', '.'))
            ->description('PRODUK')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('', 'Rp' . number_format(Laporan:: 
                when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                ->when($perolehan_jam, fn($query) => $query->where('perolehan_jam', $perolehan_jam)) // Filter berdasarkan perolehan_jam
                ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                ->when($program, fn($query) => $query->where('program', $program)) // Tambahkan filter nama_cs
                ->where('program', 'PLATFORM')
                ->sum('jml_perolehan'), 0, ',', '.'))
            ->description('PLATFORM')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }
}
