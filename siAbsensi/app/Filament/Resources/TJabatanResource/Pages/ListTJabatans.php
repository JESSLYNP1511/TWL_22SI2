<?php

namespace App\Filament\Resources\TJabatanResource\Pages;

use App\Filament\Resources\TJabatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTJabatans extends ListRecords
{
    protected static string $resource = TJabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(), // Tombol New
            Actions\Action::make('cetak_laporan')
            ->label('Cetak Laporan')
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan())
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Pengguna')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan?'),
            ];
    }
    public static function cetakLaporan()
    {
        // Ambil data pengguna
        $data = \App\Models\User::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('Laporan.cetak', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporanpengguna.pdf');
    }
}
