<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

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

        // Ici, vous pouvez envoyer un email ou enregistrer le message dans la base de données
        // Exemple d'envoi d'email (nécessite de configurer un service de mail)
        // Mail::to('votre@email.com')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
}