<?php

namespace App\Filament\Lapharian\Widgets;

use App\Models\Laporan;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class lapwid extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        // Mengambil nilai filter dan menetapkan default value jika tidak ada
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;

        return [
            Stat::make('', 'Rp' . number_format(
                Laporan::when($start, fn ($query) => $query->whereDate('tanggal', '>=', $start))
                    ->when($end, fn ($query) => $query->whereDate('tanggal', '<=', $end))
                    ->sum('jml_perolehan'), 
                0, ',', '.')
            )
                ->description('Jumlah Perolehan')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('', Laporan::when($start, fn ($query) => $query->whereDate('tanggal', '>=', $start))
                    ->when($end, fn ($query) => $query->whereDate('tanggal', '<=', $end))
                    ->count('nama_donatur')
            )
                ->description('Jumlah Donatur')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('', Laporan::distinct('program')->count())
                ->description('Jumlah Program')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
