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

        $body = "Contact\n\n";
        $body .= "Nom : {$validated['name']}\n";
        $body .= "Email : {$validated['email']}\n\n";
        $body .= "Message : {$validated['message']}\n";

        Mail::raw($body, function ($mail) use ($validated) {
            $mail->to('julie.cariou2605@gmail.com')
                ->from('julie.cariou2605@gmail.com', 'Portfolio - Contact')
                ->replyTo($validated['email'], $validated['name'])
                ->subject('Message de contact');
        });

        return redirect()->back()->with('success-contact', 'Votre message a été envoyé avec succès!');
    }
}