<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $table = 'anime';

    protected $primaryKey = 'id';

    protected $fillable = ['anime_title','blog_title','description','aired','studio','slug','anime_image_profile'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

//    protected $hidden = 'id';
}
