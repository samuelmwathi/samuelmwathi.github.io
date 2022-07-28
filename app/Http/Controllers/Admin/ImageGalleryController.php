<?php

namespace App\Http\Controllers\Admin;

use App\GalleryImage;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    public function images()
    {
        $images = GalleryImage::paginate(20);

        return view('admin.gallery.images.index',[
            'images'=>$images
        ]);
    }

    public function add()
    {
        return view('admin.gallery.images.add');
    }

    public function submit(Request  $request)
    {
        $validate = $request->validate([
            'image' => 'required | mimes:jpeg,jpg,png,bmb,gif,svg',
            'description'=>'required|string'
        ]);

        $filenamewithextension = $request->file('image')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('image')->getClientOriginalExtension();

        //filename to store
        $filenametostore = 'gallery/'.time().'.'.$extension;

        //Upload File to s3
        $storeImage = Storage::disk('public')->put($filenametostore, fopen($request->file('image'), 'r+'), 'public');

        $fileUrl = $filenametostore;
        if ($storeImage)
        {
            $storePath = GalleryImage::create([
                    'image'=>$fileUrl,
                    'description'=>$request->description,
                    'user_id'=>Auth::id()
                ]);
            return back()->with('success','Gallery image uploaded successfully.');
        }
        return back()->with('error','An unexpected error occurred.Please try again.');
    }
    //Delete image
    public function delete($imageId)
    {
        $image = GalleryImage::findOrFail($imageId);

        $image->delete();



        return back()->with('success','Image Deleted successfully.');
    }
}
