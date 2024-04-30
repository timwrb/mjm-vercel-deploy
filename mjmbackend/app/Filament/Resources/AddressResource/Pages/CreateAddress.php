<?php

namespace App\Filament\Resources\AddressResource\Pages;

use App\Filament\Resources\AddressResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAddress extends CreateRecord
{
    protected static string $resource = AddressResource::class;
/*
    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        //insert the student
        $record =  static::getModel()::create($data);

        // Create a new Address model instance
        $jobpost = new \App\Models\Address;
        $jobpost->zip = $data['zip_name'];
        $jobpost->city = $data['name_city'];
        $jobpost->state = $data['name_state'];
        $jobpost->street = $data['street_name'];
        $jobpost->house_nr = $data['housenumber_name'];
        $jobpost->address_addition = $data['address_addition'];
        $jobpost->user_id = auth()->id();
        $jobpost->save();

        // Assuming 'address_id' is the foreign key linking to addresses
        $jobpost->address_id = $record->address_id;

        // Save the record instance
        $jobpost->save();

        return $record;
    }*/


}


