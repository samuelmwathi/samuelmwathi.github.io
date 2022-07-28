<?php

namespace App\Http\Livewire\Front;

use App\Enquiry;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Contact extends Component
{
    public $loading = false;

    public $message;
    public $phone;
    public $name;
    public $subject;
    public $email;


    public function submitDetails()
    {


        $this->loading = true;

        sleep(10);

        $this->validate([
            'message' => 'required|string',
            'name'    => 'required|string',
            'subject' => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'required|numeric'
        ]);

        $submit = Contact::create([
            'name'=>$this->input('name'),
            'email'=>$this->input('email'),
            'phone'=>$this->input('phone'),
            'subject'=>$this->input('subject'),
            'message'=>$this->input('message')
        ]);

        $this->loading = false;
        if (!$submit){
            Session::flash('error','An unexpected error occurred.Please try again.');
        }else{
            Session::flash('success','Message submitted successfully.');
        }

    }
    public function render()
    {
        return view('livewire.front.contact');
    }
}
