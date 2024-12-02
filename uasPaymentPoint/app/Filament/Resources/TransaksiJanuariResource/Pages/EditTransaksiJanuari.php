<?php

namespace App\Filament\Resources\TransaksiJanuariResource\Pages;

use App\Filament\Resources\TransaksiJanuariResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransaksiJanuari extends EditRecord
{
    protected static string $resource = TransaksiJanuariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
