<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'legal_form',
        'tax_id',
        'logo',
        'industry',
        'contact_email',
        'contat_phone',
        'address',
    ];

    public function address(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function setAddressData($data)
    {
        $this->city = $data['city'];
        $this->zip = $data['zip'];
        $this->state = $data['state'];
        $this->street = $data['street'];
        $this->house_nr = $data['house_nr'];
        $this->address_addition = $data['address_addition'];
    }
    public function save(array $options = [])
    {
        // First, create the Address
        $address = new \App\Models\Address;
        $address->city = $this->city;
        $address->zip = $this->zip;
        $address->state = $this->state;
        $address->street = $this->street;
        $address->house_nr = $this->house_nr;
        $address->address_addition = $this->address_addition;
        $address->user_id = auth()->id();
        $address->save();

        // Set the address_id on the Company model
        $this->address_id = $address->id;

        // Remove the address data from the Company model
        unset($this->city, $this->zip, $this->state, $this->street, $this->house_nr, $this->address_addition);

        // Save the company instance
        parent::save($options);
    }

}
