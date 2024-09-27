<?php

namespace App\Filament\Resources\LaporansResource\Pages;

use App\Filament\Resources\LaporansResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporans extends EditRecord
{
    protected static string $resource = LaporansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
