<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Company;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Neues Unternehmen / Standort';
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
                        TextInput::make('zip')->label('PLZ')
                            ->required(),
                        TextInput::make('city')->label('Stadt')
                            ->required(),
                        TextInput::make('state')->label('State')
                            ->required(),
                        TextInput::make('street')->label('Straße')
                            ->required(),
                        TextInput::make('house_nr')->label('Hausnummer')
                            ->required(),
                        TextInput::make('address_addition')->label('Addition')
                            ->required(),
                    ]),

            ])
            ->columns(2);
    }
    protected function handleRegistration(array $data): Company
    {
        // Separate the address data from the company data
        $addressData = [
            'zip' => $data['zip'],
            'city' => $data['city'],
            'state' => $data['state'],
            'street' => $data['street'],
            'house_nr' => $data['house_nr'],
            'address_addition' => $data['address_addition'],
        ];

        // Remove the address data from the company data
        $companyData = array_diff_key($data, $addressData);

        // Create the company and set the address data
        $team = new Company($companyData);
        $team->setAddressData($addressData);
        $team->save();

        $team->user_id = auth()->id();
        $user = auth()->user();

        // Associate the company with the user
        $user->addCompany($team);

        return $team;
    }
}



