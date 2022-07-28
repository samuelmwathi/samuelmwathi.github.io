<?php

namespace App\Http\Controllers;

use App\ClientQuote;
use App\Http\Livewire\Front\Contact;
use Canvas\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index()
    {
        $posts =  Post::published()
            ->orderByDesc('published_at')
            ->simplePaginate(3);
        $quotes = ClientQuote::latest()->get()->take(3);
        return view('front.home',[
            'posts'=>$posts,
            'quotes'=>$quotes
        ]);
    }

    public function experience()
    {
        $quotes = ClientQuote::latest()->get();

        return view('front.experience',[
            'quotes'=>$quotes
        ]);
    }


}
