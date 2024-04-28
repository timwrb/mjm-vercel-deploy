<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobpost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'adress_id',
        'visible',
        'active',
        'name_city',
        'zip_name',
        'street_name',
        'housenumber_name',
        'address_addition',
        'name_state',
    ];


    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(tag::class, 'job_post_tag');
    }

    public function address(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(address::class);
    }


    public function save(array $options = [])
    {
        // First, create the Address
        $address = new \App\Models\Address;
        $address->zip = $this->zip_name;
        $address->city = $this->name_city;
        $address->state = $this->name_state;
        $address->street = $this->street_name;
        $address->house_nr = $this->housenumber_name;
        $address->address_addition = $this->address_addition;
        $address->user_id = auth()->id();
        $address->save();

        $this->address_id = $address->id;
        unset($this->zip_name, $this->name_city, $this->name_state, $this->street_name, $this->housenumber_name, $this->address_addition);

        // Save the jobpost instance
        parent::save($options);



    }
}