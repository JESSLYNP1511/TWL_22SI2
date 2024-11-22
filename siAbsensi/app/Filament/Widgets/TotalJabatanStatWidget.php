<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalJabatanStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalJabatan = DB::table('t_jabatans')->count();
        return [
            Card::make('Total Jabatan', $totalJabatan)
                ->description('Jumlah total pegawai saat ini')
                ->descriptionIcon('heroicon-s-academic-cap')
                ->color('success'),

        ];
    }
}
