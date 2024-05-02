<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Company;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;


class EditTeamProfile extends EditTenantProfile

{
    public static function getLabel(): string
    {
        return 'Unternehmensprofil';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
            Split::make([
                Section::make('Anzeigename')
                    ->description('Gib gerne eine Beschreibung ab, um dich vorzustellen')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->label('Unternehmens Titel'),
                        Textarea::make('desc')
                            ->label('Beschreibung (Optional)'),
                        FileUpload::make('Logo')
                            ->image(),
                    ]),

                    Section::make('Unternehmensdaten')
                        ->description('Fülle die folgenden Felder aus, um dein Unternehmen zu registrieren')
                        ->schema([
                        TextInput::make('legal_form')
                            ->required()
                            ->label('Rechtsform'),
                        TextInput::make('tax_id')
                            ->required()
                            ->label('Steuer-Identifikationsnummer'),
                        TextInput::make('industry')
                            ->required(),
                ]),
            ])->from('md'),

                Section::make('Kontaktdaten')
                    ->description('Diese Daten werden Benutzern angezeigt, die sich für deine Stellenanzeigen interessieren.')
                    ->schema([
                        TextInput::make('contact_email')
                            ->email(),
                        TextInput::make('contat_phone')
                            ->label('Telefonnummer')
                            ->required(),
                        ])->columns(2),


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
            ]);

    }
}

