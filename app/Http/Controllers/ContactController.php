<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

     public function show()
    {
        return view('contact'); // looks for resources/views/contact.blade.php
    }


    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Example: send email (you can adjust as needed)
        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('youssefekrimi@gmail.com')
                 ->subject('New Contact Message from '.$validated['name'])
                 ->replyTo($validated['email']);
        });

        return redirect("/")->with('success', 'Message sent successfully!');
    }
}
