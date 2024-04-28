<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InternPostResource\Pages;
use App\Filament\Resources\InternPostResource\RelationManagers;
use App\Models\InternPost;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InternPostResource extends Resource
{
    protected static ?string $model = Internpost::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Stellenanzeigen';

    protected static ?string $navigationLabel = 'Praktikumsstellen';

    public static function form(Form $form): Form
    {
        $tags = \App\Models\InternTag::all()->pluck('interntag', 'id')->toArray();

        return $form
            ->schema([
                Forms\Components\Section::make('Anzeige erstellen')
                    ->description('Gestalte deine individuelle Stellenanzeige')
                    ->schema([
                        Forms\Components\TextInput::make('title')->label('Titel')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),
                        Forms\Components\MarkdownEditor::make('content')->label('Stellenbeschreibung')
                            ->required()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'heading',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'undo', ])
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Section::make('Adresse')
                    ->schema([
                        Forms\Components\TextInput::make('name_state')->label('Bundesland / Provinz')
                            ->required(),
                        Forms\Components\TextInput::make('zip_name')->label('PLZ')
                            ->required(),
                        Forms\Components\TextInput::make('name_city')->label('Stadt')
                            ->required(),
                        Forms\Components\TextInput::make('street_name')->label('Straße')
                            ->required(),
                        Forms\Components\TextInput::make('housenumber_name')->label('Hausnummer')
                            ->required(),
                        Forms\Components\TextInput::make('address_addition')->label('Addition')

                    ]),

                Section::make('Interntags')->schema([
                    Forms\Components\Select::make('interntags')
                        ->relationship('interntags', 'interntag')
                        ->searchable()
                        ->multiple()
                        ->options($InternTags)
                        ->placeholder('Select Tags'),
                ]),

                Forms\Components\Toggle::make('visible')
                    ->required(),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('visible')
                    ->boolean(),
                Tables\Columns\IconColumn::make('active')
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
