<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserProjectResource\Pages;
use App\Filament\Resources\UserProjectResource\RelationManagers;
use App\Models\UserProject;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserProjectResource extends Resource
{
    protected static ?string $model = UserProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('identifier')
                ->label('Identifier')
                ->required(),

                Forms\Components\Select::make('provider')
                ->label('Provider')
                ->options([
                    'PDAM' => 'PDAM',
                    'PLN' => 'PLN',
                    'PGN' => 'PGN',
                ])
                ->required(),

                Forms\Components\DatePicker::make('created')
                ->label('Created')
                ->required(),

                Forms\Components\DatePicker::make('signed_in')
                ->label('Signed In')
                ->required(),

                Forms\Components\TextInput::make('user_uid')
                ->label('User UID')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identifier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('provider')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('signed_in')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('user_uid')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUserProjects::route('/'),
            'create' => Pages\CreateUserProject::route('/create'),
            'edit' => Pages\EditUserProject::route('/{record}/edit'),
        ];
    }
}
