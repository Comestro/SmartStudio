<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LetterPad;

class LetterPadController extends Controller
{
   
    public function create()
    {
        return view('letter.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'subject' => 'required|string',
            'body' => 'required|string',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

       
        $signaturePath = null;
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        }

       
        $letterPad = LetterPad::create([
            'name' => $request->name,
            'address' => $request->address,
            'subject' => $request->subject,
            'body' => $request->body,
            'signature_image' => $signaturePath,
        ]);

        return redirect()->route('letter.index')->with('success', 'Letter Pad Created Successfully!');
    }

    
    public function show($id)
    {
        $letterPad = LetterPad::findOrFail($id);
        return view('letter.show', compact('letterPad'));
    }


    public function index()
    {
        $letterPad = LetterPad::all();
        return view('letter.index', compact('letterPad'));
    }

    public function edit($id)
    {
        $letterPad = LetterPad::findOrFail($id);
        return view('letter.edit', compact('letterPad'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'subject' => 'required|string',
            'body' => 'required|string',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $letterPad = LetterPad::findOrFail($id);

      
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
            $letterPad->signature_image = $signaturePath;
        }

        $letterPad->update([
            'name' => $request->name,
            'address' => $request->address,
            'subject' => $request->subject,
            'body' => $request->body,
        ]);

        return redirect()->route('letter.index')->with('success', 'Letter Pad Updated Successfully!');
    }

  
    public function destroy($id)
    {
        $letterPad = LetterPad::findOrFail($id);
        $letterPad->delete();

        return redirect()->route('letter.index')->with('success', 'Letter Pad Deleted Successfully!');
    }
}
