<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\StatsOverviewWidget\Card;


class TotalHistoryStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCustomer = DB::table('histories')->count();
        return [
            Card::make('Total Transaksi', $totalCustomer)
                ->description('Jumlah total transaksi saat ini')
                ->descriptionIcon('heroicon-s-document-text')
                ->color('success'),
        ];        
    }
}
