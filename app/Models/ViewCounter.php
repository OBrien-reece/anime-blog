<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewCounter extends Model
{
    use HasFactory;

    protected $table = 'view_counter';
    protected $fillable = ['view_counter', 'anime_id'];

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function anime() {
        return $this->belongsTo(Anime::class);
    }
}
