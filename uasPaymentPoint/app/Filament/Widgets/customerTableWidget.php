<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\userInformation;

class customerTableWidget extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                userInformation::query()
                ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Customer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email Customer')
                    ->searchable(),   
                Tables\Columns\TextColumn::make('noHp')
                    ->label('No HP Customer')
                    ->searchable(),     
            ]);
    }
}
