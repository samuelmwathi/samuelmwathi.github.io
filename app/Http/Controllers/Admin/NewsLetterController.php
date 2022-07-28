<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsletterEmail;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function newsletter(){
        $emails = NewsletterEmail::latest()->paginate(30);

        return view('admin.newsletter.emails',[
            'emails'=>$emails
        ]);
    }
}
