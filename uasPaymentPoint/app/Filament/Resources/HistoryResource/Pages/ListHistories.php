<?php

namespace App\Filament\Resources\HistoryResource\Pages;

use App\Filament\Resources\HistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHistories extends ListRecords
{
    protected static string $resource = HistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
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
        $data = \App\Models\history::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('Laporan.cetak3', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporanhistory.pdf');
    }
}
