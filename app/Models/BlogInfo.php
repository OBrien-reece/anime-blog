<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogInfo extends Model
{
    use HasFactory;

    protected $table = 'blog_information';

    protected $fillable = ['blog_id	type', 'status', 'premiered', 'studio', 'genre', 'licensors'];

    protected $hidden = 'id';

    public $timestamps = false;
}
