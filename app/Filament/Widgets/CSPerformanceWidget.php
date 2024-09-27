<?php

namespace App\Filament\Widgets;

use App\Models\Laporan;
use Filament\Widgets\BarChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class CSPerformanceWidget extends BarChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'Perolehan Customer Service (CS)';
    
    // Mengatur lebar widget menjadi 'full'
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        // Mengambil data filter dari page
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;
        $perolehan_jam = $this->filters['perolehan_jam'] ?? null;
        $program = $this->filters['program'] ?? null;
        

        // Query untuk menghitung total perolehan per CS
        $data = Laporan::selectRaw('nama_cs, SUM(jml_perolehan) as total_perolehan')
            ->when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
            ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
            ->when($perolehan_jam, fn($query) => $query->where('perolehan_jam', $perolehan_jam))
            ->when($program, fn($query) => $query->where('program', $program))// Filter berdasarkan jam perolehan
            ->groupBy('nama_cs')
            ->get();

        // Mengatur data untuk chart
        return [
            'datasets' => [
                [
                    'label' => 'Total Perolehan',
                    'data' => $data->pluck('total_perolehan')->toArray(), // Ambil total perolehan
                    'backgroundColor' => '#117554', // Warna grafik (hijau)
                ],
            ],
            'labels' => $data->pluck('nama_cs')->toArray(), // Ambil nama CS
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
