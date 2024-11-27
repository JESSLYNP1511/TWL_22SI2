<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserInformationResource\Pages;
use App\Filament\Resources\UserInformationResource\RelationManagers;
use App\Models\UserInformation;
use App\Models\Customer;
use App\Imports\userInformationImport;
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

class UserInformationResource extends Resource
{
    protected static ?string $model = UserInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('cust_id')
                    ->label('ID')
                    ->options(customer::all()->pluck('user_uid','id'))
                    ->searchable(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->label('Name'),
                Forms\Components\Select::make('email')
                    ->required()
                    ->options(customer::all()->pluck('identifier'))
                    ->label('Email'),
                Forms\Components\TextInput::make('alamat')
                    ->label('Address'),
                Forms\Components\TextInput::make('noHp')
                    ->label('Phone Number'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('cust_id')
                        ->label('ID'),
                    Tables\Columns\TextColumn::make('nama')
                        ->label('Name')
                        ->sortable()
                        ->searchable(),
                    Tables\Columns\TextColumn::make('email')
                        ->label('Email')
                        ->sortable()
                        ->searchable(),
                    Tables\Columns\TextColumn::make('alamat')
                        ->label('Address'),
                    Tables\Columns\TextColumn::make('noHp')
                        ->label('Phone Number'),
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
                            Excel::import(new userInformationImport, $filePath);
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
            'index' => Pages\ListUserInformation::route('/'),
            'create' => Pages\CreateUserInformation::route('/create'),
            'edit' => Pages\EditUserInformation::route('/{record}/edit'),
        ];
    }
}
