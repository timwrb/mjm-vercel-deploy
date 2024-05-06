<?php

namespace App\Filament\Dashboard\Resources;

use App\Filament\Dashboard\Resources\InternPostResource\Pages;
use App\Filament\Dashboard\Resources\InternPostResource\RelationManagers;
use App\Models\InternPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InternPostResource extends Resource
{
    protected static ?string $model = InternPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    protected static ?string $navigationGroup = 'Stellenanzeigen';

    protected static ?string $navigationLabel = 'Praktikumsstellen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('job_state')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_zip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_street')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_house_nr')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_address_addition')
                    ->maxLength(255),
                Forms\Components\Toggle::make('visible')
                    ->required(),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\Toggle::make('payed')
                    ->required(),
                Forms\Components\TextInput::make('duration')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_state')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_zip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_street')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_house_nr')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_address_addition')
                    ->searchable(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('payed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('duration')
                    ->searchable(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInternPosts::route('/'),
            'create' => Pages\CreateInternPost::route('/create'),
            'view' => Pages\ViewInternPost::route('/{record}'),
            'edit' => Pages\EditInternPost::route('/{record}/edit'),
        ];
    }
}
