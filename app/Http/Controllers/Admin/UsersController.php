<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\RegisterAdmin;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::where('id','<>',Auth::user()->id)->paginate(20);

        return view('admin.users.users',[
            'users'=>$users
        ]);
    }
    //New User
    public function newUser()
    {
        $roles = Role::all();
        return view('admin.users.create',[
            'roles'=>$roles
        ]);
    }
    //Register user
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email'=>'required|unique:users',
            'phone'=>'required|unique:users',

        ]);

        $token = (string) Str::uuid();
        $register = User::create([
            'firstName'=>$request->input('firstName'),
            'midName'=>$request->input('midName'),
            'lastName'=>$request->input('lastName'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),

            'password'=>'x',
            'remember_token'=>$token,
            'userType'=>1
        ]);

        if (!$register)
        {
            return back()->with('error','An unexpected error occurred.')->withInput();
        }
        Mail::to($register->email)->send(new RegisterAdmin($register,$token));

        return redirect()->route('admin.users')->with('success','New user added successfully.');

    }
    //Activate account
    public function activate($token)
    {
        $user = User::where('remember_token',$token)->first();
        if (!isset($user))
        {
            return redirect()->route('admin.login')->with('error','Your token has expired.Contact Admin.');

        }
        return view('admin.auth.activate',[
            'details'=>$user
        ]);



    }
    //Activate Account
    public function activateAccount(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $checkUser = User::where('email',$request->input('email'))
            ->where('remember_token',$request->input('token'))
            ->first();
        if ($checkUser)
        {
            $token = bin2hex(openssl_random_pseudo_bytes(30));
            $update = User::where('email',$request->input('email'))->update([
                'password' => Hash::make($request->input('password')),
                'remember_token'=>$token,
                'verified'=>1
            ]);

            if (!$update)
            {
                return back()->withInput()->with('error','An unexpected error occurred.Please try again.');
            }

            return redirect()->route('admin.login')->with('success','Account activated.');
        }

        return redirect()->route('admin.login')->with('error','Account Token has expired.Contact IT.');
    }
    //User details
    public function details($id)
    {
        $userDetails = User::find($id);
        $roles = Role::all();
        return view('admin.users.details',[
            'details'=>$userDetails,
            'roles'=>$roles
        ]);
    }
    //Update user details
    public function updateUser(Request $request,$id)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        $update = User::where('id',$id)->update([
            'firstName'=>$request->input('firstName'),
            'middleName'=>$request->input('midName'),
            'lastName'=>$request->input('lastName'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),

        ]);

        if (!$update)
        {
            return back()->with('error','An unexpected error occurred.')->withInput();
        }

        return back()->with('success','User Details Updated successfully.');

    }
    //Delete User
    public function delete($id)
    {
        $userDetails = User::find($id);
        $userDetails->delete();

        return redirect()->route('admin.users')->with('success','User Deleted successfully.');

    }
    //Suspend User
    public function suspend($id)
    {
        $user = User::where('id',$id)->update([
            'status'=>false
        ]);

        return back()->with('success','User Suspended successfully.');

    }
    //Activate User
    public function activateUser($id)
    {
        $user = User::where('id',$id)->update([
            'status'=>true
        ]);

        return back()->with('success','User Activated successfully.');

    }
}
