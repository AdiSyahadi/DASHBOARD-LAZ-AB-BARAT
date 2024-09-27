<?php
namespace App\Filament\Widgets;

use App\Models\Laporan;
use Filament\Widgets\LineChartWidget;
use Filament\Widgets\BarChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Concerns\InteractsWithPageFilters;

class DailyPerformanceWidget extends BarChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'Perolehan Tiap Hari';
    // Mengatur lebar widget menjadi 'full'
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;
        $perolehan_jam = $this->filters['perolehan_jam'] ?? null;
        $nama_cs = $this->filters['nama_cs'] ?? null;
        $program = $this->filters['program'] ?? null;

        // Mendapatkan data perolehan setiap hari dalam seminggu
        $data = Laporan::selectRaw('DAYOFWEEK(tanggal) as hari, SUM(jml_perolehan) as total_perolehan')
            ->when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
            ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
            ->when($perolehan_jam, fn($query) => $query->where('perolehan_jam', $perolehan_jam)) // Filter perolehan_jam
            ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
            ->when($program, fn($query) => $query->where('program', $program)) // Filter nama_cs
            ->groupBy('hari')
            ->orderBy('hari')
            ->get();

        // Label hari dalam seminggu (1 = Minggu, 7 = Sabtu)
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

        // Menyusun data untuk chart
        // Mengisi data hari yang tidak ada dengan 0
        $labels = [];
        $values = [];
        foreach (range(1, 7) as $day) {
            $labels[] = $days[$day - 1];
            $values[] = $data->firstWhere('hari', $day)->total_perolehan ?? 0;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Perolehan Jam',
                    'data' => $values,
                    'borderColor' => '#117554',
                    'backgroundColor' => '#FFA823', // Warna line chart
                    
                    'fill' => false,
                ],
            ],
        ];
    }
}
