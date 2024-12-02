<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\history;

class PaymentGrowthChart extends ChartWidget
{
    protected static ?string $heading = 'Perbandingan Payment';

    protected function getData(): array
    {
        
        $historyData = history::selectRaw('type, SUM(price) as total_price')
            ->groupBy('type')
            ->get();

        $types = [];
        $totalPrices = [];

        foreach ($historyData as $data) {
            $types[] = $data->type;
            $totalPrices[] = $data->total_price;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Harga',
                    'data' => $totalPrices,
                    'backgroundColor' => ['#f87171', '#fbbf24', '#34d399', '#60a5fa'],
                ],
            ],
            'labels' => $types,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; 
    }
}
