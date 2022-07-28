<?php

namespace App\Http\Controllers\Admin;

use App\ClientQuote;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientQuotesController extends Controller
{
    public function quotes(){
        $quotes = ClientQuote::all();

        return view('admin.quotes.list',[
            'quotes'=>$quotes
        ]);
    }

    //create
    public function create()
    {
        return view('admin.quotes.create');
    }
    //Submit
    public function submit(Request  $request)
    {
        $validatedData = $request->validate([
            'quote' => 'required',
            'name' => 'required',
            'company'=>'required',
            'position'=>'required',
        ]);

        $create = ClientQuote::create($request->except('_token'));
        if (!$create){
            return back()->with('error','An unexpected error occurred.Please try again');
        }
        return  back()->with('success','Quote Stored Successfully.');

    }

    public function edit($id)
    {
        $details = ClientQuote::findOrFail($id);

        return view('admin.quotes.edit',[
            'details'=>$details
        ]);
    }

    //Update
    public function update(Request  $request,$id)
    {
        $details = ClientQuote::findOrFail($id);

        $validatedData = $request->validate([
            'quote' => 'required',
            'name' => 'required',
            'company'=>'required',
            'position'=>'required',
        ]);

        $create = $details->update($request->except('_token'));
        if (!$create){
            return back()->with('error','An unexpected error occurred.Please try again');
        }
        return  back()->with('success','Quote Updated Successfully.');
    }

    public function delete($id)
    {
        $details = ClientQuote::findOrFail($id);

        $details->delete();

        return back()->with('success','Quote deleted successfully.');
    }
}
