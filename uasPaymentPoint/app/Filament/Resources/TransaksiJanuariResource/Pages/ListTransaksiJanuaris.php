<?php

namespace App\Filament\Resources\TransaksiJanuariResource\Pages;

use App\Filament\Resources\TransaksiJanuariResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransaksiJanuaris extends ListRecords
{
    protected static string $resource = TransaksiJanuariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
