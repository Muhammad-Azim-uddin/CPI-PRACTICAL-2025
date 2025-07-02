<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    function store(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact entry
       Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    function destroy($id){
        // Find the contact entry by ID and delete it
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Contact entry deleted successfully!');
    }

    function leadsContact(){
        // Fetch all contact entries
        $contacts = Contact::paginate(20);

        // Return the view with contacts data
        return view('backend.contact.index', compact('contacts'));
    }
}
