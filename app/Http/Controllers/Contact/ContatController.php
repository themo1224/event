<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContatController extends Controller
{
    public function sendContactForm(Request $request)
    {

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'reason' => 'required|string',
            'phone' => 'nullable|string|max:15',
            'message' => 'required|string',
        ]);



        Mail::to('contact@spadserver.com')->send(new ContactFormMail($validatedData));
        return redirect()->back();
    }
}
