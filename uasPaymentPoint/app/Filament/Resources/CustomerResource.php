<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use App\Imports\CustomerImport;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('identifier')
                    ->required()
                    ->unique()
                    ->label('Email Identifier'),
                Forms\Components\Select::make('provider')
                    ->options([
                        'Email' => 'Email',
                    ])
                    ->searchable()
                    ->native(false)
                    ->label('Sign-In Provider'),
                Forms\Components\DatePicker::make('created')
                    ->required()
                    ->label('Created Date'),
                Forms\Components\DatePicker::make('signed_in')
                    ->required()
                    ->label('Last Signed In'),
                    Forms\Components\TextInput::make('user_uid')
                    ->required()
                    ->label('User UID'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identifier')
                    ->label('Email Identifier')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('provider')
                    ->label('Sign-In Provider'),
                Tables\Columns\TextColumn::make('created')
                    ->label('Created Date'),
                Tables\Columns\TextColumn::make('signed_in')
                    ->label('Last Signed In'),
                Tables\Columns\TextColumn::make('user_uid')
                    ->label('User UID'),
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
                        Excel::import(new CustomerImport, $filePath);
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
                ->modalHeading('Import Data Customer')
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
