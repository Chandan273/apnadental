<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{10,15}$/',
            'message' => 'required|string',
        ]);

        // Create a new Contact model instance and fill it with the validated data
        $contact = new Contact($validatedData);

        // Save the contact record to the database
        $contact->save();

        // Optionally, you can redirect the user after successful submission
        return redirect()->back()->with('success', 'Thank you for your message! We will get in touch with you soon.');
    }
}
