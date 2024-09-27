<!-- resources/views/filament/lapharian/pages/dashboard.blade.php -->

<x-filament-panels::page>
    <x-filament::card>
        <x-slot name="header">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <x-slot name="content">
            <!-- Filter Form -->
            <form method="POST" action="#">
                @csrf
                {!! $this->filtersForm()->render() !!}
            </form>
            
            <!-- Widgets -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($this->getWidgets() as $widget)
                    @livewire($widget)
                @endforeach
            </div>
        </x-slot>
    </x-filament::card>
</x-filament-panels::page>
