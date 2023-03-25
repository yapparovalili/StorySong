<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vocal',
        'city',
        'experience',
        'achievements',
        'user_id',
        'is_verified',
        'phone',
        'studio'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
