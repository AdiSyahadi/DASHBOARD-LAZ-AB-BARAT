<?php
namespace App\Filament\Widgets;

use App\Models\Laporan;
use Filament\Widgets\LineChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Carbon\Carbon;

class FridayPerformanceWidget extends LineChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'Perolehan Tiap Hari Jumat';
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $start = $this->filters['created_at'] ?? null;
        $end = $this->filters['updated_at'] ?? null;
        $perolehan_jam = $this->filters['perolehan_jam'] ?? null;
        $nama_cs = $this->filters['nama_cs'] ?? null;
        $program = $this->filters['program'] ?? null;

        // Mendapatkan data perolehan dari hari Jumat
        $data = Laporan::selectRaw('DATE(tanggal) as tanggal, SUM(jml_perolehan) as total_perolehan')
            ->when($start, fn($query) => $query->whereDate('tanggal', '>=', $start))
            ->when($end, fn($query) => $query->whereDate('tanggal', '<=', $end))
            ->when($perolehan_jam, fn($query) => $query->where('perolehan_jam', $perolehan_jam)) // Filter berdasarkan perolehan_jam
            ->when($nama_cs, fn($query) => $query->where('nama_cs', $nama_cs))
            ->when($program, fn($query) => $query->where('program', $program)) // Filter berdasarkan nama_cs
            ->whereRaw('WEEKDAY(tanggal) = 4') // 4 adalah hari Jumat
            ->groupBy('tanggal')
            ->orderBy('tanggal')
            ->get();

        // Menyusun data untuk chart
        $labels = $data->pluck('tanggal');
        $values = $data->pluck('total_perolehan');

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Perolehan Jam',
                    'data' => $values,
                    'borderColor' => '#4F46E5', // Warna line chart
                    'fill' => false,
                ],
            ],
        ];
    }
}
