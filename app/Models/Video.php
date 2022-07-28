<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table="create_video";

    protected $fillable = [
        'title',
        'short_descript',
        'descript',
        'cat_id',
        'vidtype_id',
        'user_id',
        'video',
    ];

    protected $attributes = [
        'video' => 'no-video',
        'descript' => 'no-descript',
        'short_descript' => 'no-description',
    ];
}
