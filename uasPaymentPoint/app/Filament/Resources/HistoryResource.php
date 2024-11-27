<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource\Pages;
use App\Filament\Resources\HistoryResource\RelationManagers;
use App\Models\History;
use App\Models\Customer;
use App\Models\UserInformation;
use App\Imports\historyImport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;

    protected static ?string $navigationLabel = 'Daftar History Customer';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Data History Customer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\Select::make('cust_id')
                        ->options(userInformation::all()->pluck('cust_id','id'))
                        ->searchable()
                        ->label('ID'),
                    Forms\Components\TextInput::make('email')
                        ->required()
                        ->label('Email'),
                    Forms\Components\Select::make('type')
                        ->options([
                            'PLN' => 'PLN',
                            'PDAM' => 'PDAM',
                            'PBB' => 'PBB',
                        ])
                        ->searchable()
                        ->native(false)
                        ->label('Transaction Type'),
                    Forms\Components\TextInput::make('price')
                        ->numeric()
                        ->required()
                        ->label('Price'),
                    Forms\Components\Select::make('status')
                        ->options([
                            'Success' => 'Success',
                            'Fail' => 'Fail',
                        ])
                        ->searchable()
                        ->native(false)
                        ->label('Status'),
                    Forms\Components\Select::make('paymentMethod')
                        ->options([
                            'Virtual Account' => 'Virtual Account',
                            'Dana' => 'Dana',
                            'Ovo' => 'Ovo',
                            'Bank Transfer' => 'Bank Transfer',
                        ])
                        ->searchable()
                        ->native(false)
                        ->label('Payment Method'),
                    Forms\Components\DatePicker::make('date')
                        ->label('Transaction Date'),
                    Forms\Components\TextInput::make('refNo')
                        ->label('Reference Number'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('cust_id')
                        ->label('ID'),
                    Tables\Columns\TextColumn::make('email')
                        ->label('Email')
                        ->sortable()
                        ->searchable(),
                    Tables\Columns\TextColumn::make('type')
                        ->label('Transaction Type'),
                    Tables\Columns\TextColumn::make('price')
                        ->label('Price'),
                    Tables\Columns\TextColumn::make('status')
                        ->label('Status'),
                    Tables\Columns\TextColumn::make('paymentMethod')
                        ->label('Payment Method'),
                    Tables\Columns\TextColumn::make('date')
                        ->label('Transaction Date'),
                    Tables\Columns\TextColumn::make('refNo')
                        ->label('Reference Number'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                Action::make('importExcel')
                    ->label('Import Excel')
                    ->action(function (array $data) {
                        // Pastikan $data['file'] adalah jalur yang valid di
                        $filePath = storage_path('app/public/' . $data['file']);
                        // Import file menggunakan jalur absolut
                        Excel::import(new historyImport, $filePath);
                        // Tampilkan notifikasi sukses
                        Notification::make()
                ->title('Data berhasil diimpor!')
                ->success()
                ->send();
                })
               ->form([FileUpload::make('file')
                ->label('Pilih File Excel')
                ->disk('public') // Pastikan disimpan di disk 'public'
                ->directory('imports')
                ->acceptedFileTypes(['application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'])
                ->required(),
                ])
                ->modalHeading('Import Data History')
                ->modalButton('Import')
                ->color('success'),
                ])
                ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
                ]),
                ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }
}
