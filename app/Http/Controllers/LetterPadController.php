<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LetterPad;

class LetterPadController extends Controller
{
    public function create()
    {
        return view('letter.create'); // Make sure the folder and view exist
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'subject' => 'required|string',
            'body' => 'required|string',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle file upload if exists
        $signaturePath = null;
        if ($request->hasFile('signature')) {
            $signaturePath = $request->file('signature')->store('signatures', 'public');
        }

        // Create a new LetterPad entry
        $letterPad = LetterPad::create([
            'name' => $request->name,
            'address' => $request->address,
            'subject' => $request->subject,
            'body' => $request->body,
            'signature_image' => $signaturePath,
        ]);

        // Redirect to the show page with the newly created letter pad ID
        return redirect()->route('letter.show', $letterPad->id)->with('success', 'Letter Pad Created Successfully!');
    }

    public function show($id)
    {
        // Find the letter pad by ID or fail
        $letterPad = LetterPad::findOrFail($id);

        // Return the letter.show view and pass the letterPad data
        return view('letter.show', compact('letterPad'));
    }
}
