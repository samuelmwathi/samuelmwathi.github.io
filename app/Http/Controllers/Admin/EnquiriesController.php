<?php

namespace App\Http\Controllers\Admin;

use App\Enquiry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    //Notifications
    public function contacts()
    {
        $contacts = Enquiry::orderBy('id','DESC')->paginate(20);
        return view('admin.contacts.contacts',[
            'messages'=>$contacts
        ]);
    }
    //Details
    public function details(Request $request)
    {
        $details = Enquiry::find($request->input('requestId'));
        return response()->json([
            'response' => true,
            'details' => $details,
        ]);
    }
    //Complete Details
    public function complete($id)
    {
        $complete = Enquiry::where('id',$id)->update([
            'status'=>1
        ]);

        if(!$complete)
        {
            return back()->with('error','An unexpected error occurred.Please try again.');
        }
        return back()->with('success','Booking marked as completed.');
    }
}
