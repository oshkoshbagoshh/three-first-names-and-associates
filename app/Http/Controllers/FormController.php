<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    // Contact Form Request
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string',
            'message' => 'nullable|string',
        ]);

        // Send an email (usig test email config )
        Mail::send(Mail::send([], [], function ($message) use ($request) {
            $message->to('hello@tfnms.co')
                    ->subject('Service Request')
                    ->setBody("
                        Name: {$request->name}
                        Email: {$request->email}
                        Company: {$request->company}
                        Service: {$request->service}
                        Message: {$request->message}
                    ");
        }));

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

