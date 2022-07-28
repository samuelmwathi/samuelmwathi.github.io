<?php

namespace App\Http\Controllers\Front;

use App\GalleryImage;
use App\GalleryVideo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function photos()
    {
        $images = GalleryImage::all();
        return view('front.resources.photo',[
            'images'=>$images
        ]);
    }
    public function video()
    {
        $videos = GalleryVideo::all();
        return view('front.resources.video',[
            'videos'=>$videos
        ]);
    }
}
