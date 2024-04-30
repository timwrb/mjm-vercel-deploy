<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobpostResource\Pages;
use App\Filament\Resources\JobpostResource\RelationManagers;
use App\Models\Jobpost;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RelationshipSelect;
use Filament\Forms\Components\MultipleSelect;

class JobpostResource extends Resource
{
    protected static ?string $model = Jobpost::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $modelLabel = 'Jobpost';

    protected static ?string $navigationLabel = 'Minijobstellen';

    protected static ?string $navigationGroup = 'Stellenanzeigen';


    public static function form(Form $form): Form
    {
        $tags = \App\Models\tag::all()->pluck('tag', 'id')->toArray();

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
                        Forms\Components\TextInput::make('address.zip_name')->label('PLZ')
                            ->required(),
                        Forms\Components\TextInput::make('address.name_city')->label('Stadt')
                            ->required(),
                        Forms\Components\TextInput::make('address.name_state')->label('State')
                            ->required(),
                        Forms\Components\TextInput::make('address.street_name')->label('Straße')
                            ->required(),
                        Forms\Components\TextInput::make('address.housenumber_name')->label('Hausnummer')
                            ->required(),
                        Forms\Components\TextInput::make('address.address_addition')->label('Addition')
                            ->required(),
                    ]),

    Section::make('Tags')->schema([
        Forms\Components\Select::make('tags')
            ->relationship('tags', 'tag')
            ->searchable()
            ->multiple()
            ->options($tags)
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
                Tables\Columns\TextColumn::make('company_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('hidden')
                    ->boolean(),
                Tables\Columns\IconColumn::make('expired')
                    ->boolean(),
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
            'index' => Pages\ListJobposts::route('/'),
            'create' => Pages\CreateJobpost::route('/create'),
            'view' => Pages\ViewJobpost::route('/{record}'),
            'edit' => Pages\EditJobpost::route('/{record}/edit'),
        ];
    }
}

