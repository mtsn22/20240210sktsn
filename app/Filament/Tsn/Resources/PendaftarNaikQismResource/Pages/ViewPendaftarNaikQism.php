<?php

namespace App\Filament\Tsn\Resources\PendaftarNaikQismResource\Pages;

use App\Filament\Tsn\Resources\PendaftarNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPendaftarNaikQism extends ViewRecord
{
    protected static string $resource = PendaftarNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }
}
