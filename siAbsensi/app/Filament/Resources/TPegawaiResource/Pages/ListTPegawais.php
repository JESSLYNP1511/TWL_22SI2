<?php

namespace App\Filament\Resources\TPegawaiResource\Pages;

use App\Filament\Resources\TPegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Model\tPegawai;
use Barryvdh\DomPDF\Facade\PDF;

class ListTPegawais extends ListRecords
{
    protected static string $resource = TPegawaiResource::class;

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
        //$data - tPegawai::ALL()
        $data = \DB::select('SELECT A.namaPegawai,B.namaJabatan jabatan, A.noHP FROM t_pegawais A INNER JOIN t_jabatans B ON A.jabatan=B.id ');
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('Laporan.cetak', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporanpegawai.pdf');
    }
}
