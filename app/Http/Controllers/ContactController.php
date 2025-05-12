<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('admin@example.com')
                 ->from($validated['email'], $validated['name'])
                 ->subject('Nouveau message de contact');
        });
        
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}
