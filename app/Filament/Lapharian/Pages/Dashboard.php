<?php

namespace App\Filament\Lapharian\Pages;

use Filament\Pages\Page;
use Filament\Lapharian\Widgets;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use App\Filament\Lapharian\Widgets\lapwid;
use App\Filament\Lapharian\Widgets\progwid;
use App\Filament\Lapharian\Widgets\realwid;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends Page
{
    use HasFiltersForm;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.lapharian.pages.dashboard';

    public function getWidgets(): array
    {
        return [
            lapwid::class,
            progwid::class,
        ];  
    }

    public function filtersForm(): Form
    {
        return Form::make($this)
            ->schema([
                Section::make("Assalamualaikum wr wb")->schema([
                    DatePicker::make('created_at'),
                    DatePicker::make('updated_at'),
                ])->columns(2),
            ]);
    }
}
