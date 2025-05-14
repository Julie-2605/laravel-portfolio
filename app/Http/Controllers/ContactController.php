<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('julie.cariou2605@gmail.com')
                ->from('julie.cariou2605@gmail.com', 'Portfolio - Formulaire')
                ->replyTo($validated['email'], $validated['name'])
                ->subject($validated['subject']);
        });

        return redirect()->back()->with('success-contact', 'Votre message a été envoyé avec succès!');
    }
}