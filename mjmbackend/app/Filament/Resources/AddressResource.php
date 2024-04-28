<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressResource\Pages;
use App\Filament\Resources\AddressResource\RelationManagers;
use App\Models\Address;
use App\Models\Street;
use App\Models\City;
use App\Models\Zip;
use App\Models\Housenumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class AddressResource extends Resource
{

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'Kundendaten';

    protected static ?string $navigationLabel = 'Standorte';

    protected static ?string $model = Address::class;



    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Standort erstellen')
            ->description('Gebe hier alle deine Standorte an, um Stellenanzeigen für verschiedene Orte zu schalten.')
            ->schema([
            Forms\Components\TextInput::make('state')
            ->label('Bundesland')
            ->required(),
            Forms\Components\TextInput::make('city')
            ->label('Stadt')
            ->required(),
            Forms\Components\TextInput::make('zip')
            ->label('PLZ')
            ->required(),
            Forms\Components\TextInput::make('street')
            ->label('Straße')
            ->required(),
            Forms\Components\TextInput::make('house_nr')
            ->label('Hausnummer')
            ->required(),
            Forms\Components\TextInput::make('address_addition')
            ->label('Adresszusatz (Optional)')
            ->nullable(),

                Forms\Components\Hidden::make('user_id')->default(auth()->id()),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table


            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('state')
                    ->sortable(),
                Tables\Columns\TextColumn::make('city')
                    ->sortable(),
                Tables\Columns\TextColumn::make('zip')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('street')
                    ->sortable(),
                Tables\Columns\TextColumn::make('house_nr')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAddresses::route('/'),
            'create' => Pages\CreateAddress::route('/create'),
            'view' => Pages\ViewAddress::route('/{record}'),
            'edit' => Pages\EditAddress::route('/{record}/edit'),
        ];
    }
}
