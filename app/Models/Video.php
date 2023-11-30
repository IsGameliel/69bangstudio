<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories',
        'privacy',
        'title',
        'description',
        'models_present',
        'new_models',
        'block_countries',
        'agree',
        'file',
        'type'
    ];
}
