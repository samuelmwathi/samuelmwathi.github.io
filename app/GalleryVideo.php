<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryVideo extends Model
{
    protected $fillable = [
        'video',
        'description'
    ];
}
