<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class jobpost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
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

    public function company(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }



}
