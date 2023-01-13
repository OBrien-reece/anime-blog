<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogInfo extends Model
{
    use HasFactory;

    protected $table = 'blog_information';

    protected $fillable = ['anime_id', 'type', 'status', 'premiered', 'studio', 'genre', 'licensors'];

    protected $hidden = 'id';

    public function anime() {
        return $this->belongsTo(Anime::class);
    }

    public $timestamps = false;
}
