<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store (Request $request){
        $validate = $request->validate([
               'name' => 'required|string|max:255',
               'email' => 'required|email|max:255',
               'message' => 'required|string',
           ]);
           Contact::create($validate);
          return redirect()->back()->with('success', 'Your message has been sent successfully!');
   
           
       }
       public function ManageContact(){
        $data['contacts']=Contact::all();
        return view('admin.contactList',$data);
       }
       
}
