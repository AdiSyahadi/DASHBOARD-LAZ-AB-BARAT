<?php

namespace App\Filament\Widgets;

use App\Models\Laporan;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class lapwid extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;
        $perolehanJam = $this->filters['perolehan_jam'] ?? null; // Mengambil nilai perolehan_jam dari filter
        $nama_cs = $this->filters['nama_cs'] ?? null;
        $program = $this->filters['program'] ?? null; // Mengambil nilai nama_cs dari filter

        return [

            Stat::make('', 'Rp' . number_format(Laporan:: 
                when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                ->when($perolehanJam, fn($query) => $query->where('perolehan_jam', $perolehanJam)) // Filter berdasarkan perolehan_jam
                ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                ->when($program, fn($query) => $query->where('program', $program)) // Tambahkan filter nama_cs
                ->sum('jml_perolehan'), 0, ',', '.'))
            ->description('Jumlah Perolehan')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('', 'Rp' . number_format(Laporan:: 
                when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                ->when($perolehanJam, fn($query) => $query->where('perolehan_jam', $perolehanJam)) // Filter berdasarkan perolehan_jam
                ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                ->when($program, fn($query) => $query->where('program', $program)) // Tambahkan filter nama_cs
                ->where('program', 'AB BARAT')
                ->sum('jml_perolehan'), 0, ',', '.'))
            ->description('AL-BAHJAH BARAT')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),

            Stat::make('', 'Rp' . number_format(Laporan:: 
                when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
                ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
                ->when($perolehanJam, fn($query) => $query->where('perolehan_jam', $perolehanJam)) // Filter berdasarkan perolehan_jam
                ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
                ->when($program, fn($query) => $query->where('program', $program)) // Tambahkan filter nama_cs
                ->where('program', 'WAKAF')
                ->sum('jml_perolehan'), 0, ',', '.'))
            ->description('WAKAF')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }
}
