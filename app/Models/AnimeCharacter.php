<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animeCharacter extends Model
{
    use HasFactory;

    protected $table = 'anime_characters';

    protected $fillable = ['anime_id', 'character_id'];

    public $timestamps = false;
}
