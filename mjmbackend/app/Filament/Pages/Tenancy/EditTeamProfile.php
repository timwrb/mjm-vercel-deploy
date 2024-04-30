<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Company;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;


class EditTeamProfile extends EditTenantProfile

{
    public static function getLabel(): string
    {
        return 'Unernehmensprofil';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Textarea::make('desc'),
                TextInput::make('legal_form')->required(),
                TextInput::make('tax_id')->required(),
                FileUpload::make('logo')->image(),
                TextInput::make('industry')->required(),
                TextInput::make('contact_email')->email(),
                TextInput::make('contat_phone'),

                Section::make('Adresse')
                    ->schema([
                        TextInput::make('address.zip_name')->label('PLZ')
                            ->required(),
                        TextInput::make('address.name_city')->label('Stadt')
                            ->required(),
                        TextInput::make('address.name_state')->label('State')
                            ->required(),
                        TextInput::make('address.street_name')->label('Straße')
                            ->required(),
                        TextInput::make('address.housenumber_name')->label('Hausnummer')
                            ->required(),
                        TextInput::make('address.address_addition')->label('Addition')
                            ->required(),
                    ]),
            ])
            ->columns(2);
    }
}

