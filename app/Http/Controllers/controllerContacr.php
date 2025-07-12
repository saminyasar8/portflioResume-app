<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class controllerContacr extends Controller // ভুল ছিল, extends Controller থাকতে হবে
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email', // Ensure unique email in contacts table
            'message' => 'required|string|max:1000',
        ]);
        

        // Create a new contact entry
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);
        Log::info('Contact Form Submitted:', [
            
            $request->except('_token'),
            'user-agent' => $request->header('user-agent'),
            'ip' => $request->ip(),
            'url' => $request->url(),
            'method' => $request->method()
        ]);
        
        // Redirect to confirmation page with data
        return redirect()->route('contact.confirmation')->with('data', $contact);
    }

    public function confirmation()
    {
        
        return view('confirmation',[
            'data' => session('data')
        ])->with([
            'data' => session('data')
        ])->with('data', session('data') ?: []); // Ensure 'data' is always an array
    }
}
