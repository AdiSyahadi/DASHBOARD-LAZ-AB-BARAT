<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashTable;
use Filament\Widgets;
use App\Models\Laporan;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\lapwid;
use App\Filament\Widgets\progwid;
use App\Filament\Widgets\realwid;
use App\Filament\Widgets\CSPerformanceWidget;
use App\Filament\Widgets\FridayPerformanceWidget;
use App\Filament\Widgets\DailyPerformanceWidget;
//use App\Filament\Widgets\jmldonatur;
use Filament\Navigation;
use Filament\Forms\Components\Select;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    public function getWidgets(): array
    {
        return [
            lapwid::class,
            progwid::class,
            FridayPerformanceWidget::class,
            DailyPerformanceWidget::class,
            CSPerformanceWidget::class,
            //jmldonatur::class,
            realwid::class,
        ];  
    }



public function filtersForm(Form $form): Form
{
    return $form->schema([
        Section::make("LAZ Al-Bahjah Barat Satu Dashboard")
            ->schema([
                // Filter untuk Perolehan Jam
                Select::make('perolehan_jam')
                    ->label('Perolehan Jam')
                    ->options([
                        '08:00-09:00 WIB' => '08:00-09:00 WIB',
                        '09:00-10:00 WIB' => '09:00-10:00 WIB',
                        '10:00-11:00 WIB' => '10:00-11:00 WIB',
                        '11:00-12:00 WIB' => '11:00-12:00 WIB',
                        '12:00-13:00 WIB' => '12:00-13:00 WIB',
                        '13:00-14:00 WIB' => '13:00-14:00 WIB',
                        '14:00-15:00 WIB' => '14:00-15:00 WIB',
                        '15:00-16:00 WIB' => '15:00-16:00 WIB',
                        '16:00-17:00 WIB' => '16:00-17:00 WIB',
                        '17:00-24:00 WIB' => '17:00-24:00 WIB',
                    ])
                    ->placeholder('Pilih Perolehan Jam'), // Placeholder jika belum dipilih
                
                 // Tambahkan filter nama_cs
                 Select::make('nama_cs')
                 ->label('Nama CS')
                 ->options(Laporan::pluck('nama_cs', 'nama_cs')->unique()->toArray())
                 ->placeholder('Pilih Nama CS'),

                 // Tambahkan filter nama_cs
                 Select::make('program')
                 ->label('Program')
                 ->options(Laporan::pluck('program', 'program')->unique()->toArray())
                 ->placeholder('Pilih Program'),
                  // DatePicker untuk created_at
                DatePicker::make('created_at')
                ->label('Dari Tanggal')
                ->placeholder('dd/mm/yyyy'),

            // DatePicker untuk updated_at
                DatePicker::make('updated_at')
                ->label('Sampai Tanggal')
                ->placeholder('dd/mm/yyyy'),
            ])
            ->columns(5), // Mengatur tata letak
    ]);
}


    protected static ?string $navigationIcon = 'heroicon-o-document-text';
}
