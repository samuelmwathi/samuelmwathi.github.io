<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Canvas\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        $posts = Post::published()
            ->orderByDesc('published_at')
            ->simplePaginate(10);
        $recentPost = Post::latest()
            ->get();
        return view('front.blog.list',[
            'posts'=>$posts,
            'recentPosts'=>$recentPost
        ]);
    }

    public function read($slug)
    {
        $details = Post::published()
            ->where('slug',$slug)
            ->firstOrFail();
        $recentPost = Post::where('slug','<>',$slug)
            ->latest()
            ->get();
        return view('front.blog.read',[
            'details'=>$details,
            'recentPosts'=>$recentPost
        ]);
    }
}
