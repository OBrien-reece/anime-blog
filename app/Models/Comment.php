<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['anime_id', 'comments', 'user_id'];

    public $timestamps = true;

    public function anime() {
        return $this->belongsTo(Anime::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
