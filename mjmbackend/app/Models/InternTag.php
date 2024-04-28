<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'interntag',
    ];

    public function Internposts(): BelongsToMany
    {
        return $this->belongsToMany(InternPost::class);
    }
}


