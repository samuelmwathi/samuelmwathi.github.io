<?php

namespace App\Http\Controllers\Admin;

use App\GalleryImage;
use App\GalleryVideo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VideoGalleryController extends Controller
{
    public function videos()
    {
        $videos = GalleryVideo::paginate(20);

        return view('admin.gallery.video.index', [
            'videos' => $videos
        ]);
    }

    public function add()
    {
        return view('admin.gallery.video.add');
    }

    public function submit(Request $request)
    {
        $validate = $request->validate([
            'video'       => 'required|string',
            'description' => 'required|string'
        ]);

        $create = GalleryVideo::create($request->all() + ['user_id', Auth::id()]);

        if ($create) {
            return back()->with('success', 'Video added successfully.');
        }
        return back()->with('error', 'An unexpected error occurred.Please try again.');
    }

    //Delete image
    public function delete($imageId)
    {
        $image = GalleryVideo::findOrFail($imageId);

        $image->delete();


        return back()->with('success', 'Video Deleted successfully.');
    }
}
