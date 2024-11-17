<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_no' => 'required|numeric|digits_between:10,15',
            'message' => 'required|string',
        ]);
        Contact::create($validate);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    public function ManageContact()
    {
        $data['contacts'] = Contact::all();
        return view('admin.contactList', $data);
    }
    public  function viewContact($id){
        $data['contact'] = Contact::find($id);
        return view('admin.viewcontact',$data);
    }
}
