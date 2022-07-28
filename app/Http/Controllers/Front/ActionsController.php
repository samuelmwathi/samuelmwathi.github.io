<?php

namespace App\Http\Controllers\Front;

use App\Enquiry;
use App\Http\Controllers\Controller;
use App\NewsletterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class ActionsController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'name'    => 'required|string',
            'subject' => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'required|numeric'
        ]);

        $submit = Enquiry::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message')
        ]);

        if (!$submit){
            Session::flash('error','An unexpected error occurred.Please try again.');
            return back()->withInput();
        }else{
            Session::flash('success','Message submitted successfully.');
            return back();
        }
    }
    //Submit newsletter
    public function newsletter(Request  $request)
    {

        $validator = Validator::make($request->all(), [
            'email'=> 'required|email'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $check = NewsletterEmail::where('email',$request->input('email'))->first();
        if ($check)
        {
            return response()->json([
                'success' => true,
                'message' => 'You are already subscribed.'
            ]);
        }

        $addSubscription = NewsletterEmail::create([
            'email'=> $request->input('email'),
        ]);

        if (!$addSubscription)
        {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred.Please try again.'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Email sent Successful.'
        ]);
    }
}
