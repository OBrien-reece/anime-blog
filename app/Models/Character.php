<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';

    protected $fillable = ['characters','power_desc','voice_actor','image_path','image_path_2'];

}
