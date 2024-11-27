<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\StatsOverviewWidget\Card;


class TotalCustomerStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCustomer = DB::table('customers')->count();
        return [
            Card::make('Total Customer', $totalCustomer)
                ->description('Jumlah total customer saat ini')
                ->descriptionIcon('heroicon-s-users')
                ->color('success'),
        ];        
    }
}
