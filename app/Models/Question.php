<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'theme_id'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
