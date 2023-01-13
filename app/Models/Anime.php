<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $table = 'anime';

    protected $primaryKey = 'id';

    protected $fillable = ['anime_title','user_id','blog_title','description','slug','anime_image_profile'];

    public function blogInformation() {
        return $this->hasMany(BlogInfo::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

//    protected $hidden = 'id';
}
