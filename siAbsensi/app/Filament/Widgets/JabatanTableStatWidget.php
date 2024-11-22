<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\tJabatan;

class JabatanTableStatWidget extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                tJabatan::query()
                ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('namaJabatan')
                    ->label('Jabatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('gajiPokok')
                    ->label('Gaji')
                    ->searchable(),
            ]);
    }
}
