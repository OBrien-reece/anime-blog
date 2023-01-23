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

    /*This Anime has many pieces of info pages it*/
    public function blogInformation() {
        return $this->hasMany(BlogInfo::class);
    }

    /*This Anime has many views from users*/
    public function viewCounter() {
        return $this->hasMany(ViewCounter::class);
    }

    public function user_comments() {
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

//    protected $hidden = 'id';
}
