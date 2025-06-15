<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'services' => 'required|array|min:1',
            'details' => 'string',
        ]);

        $services = Service::whereIn('id', $validated['services'])->get();
        $total = $services->sum('price');

        $body = "Demande de devis\n\n";
        $body .= "Nom : {$validated['name']}\n";
        $body .= "Email : {$validated['email']}\n\n";
        $body .= "Services sélectionnés :\n";

        foreach ($services as $service) {
            $body .= "- {$service->name} : " . number_format($service->price, 2) . " €\n";
        }

        $body .= "\nTotal estimé : " . number_format($total, 2) . " €\n";

        if (!empty($validated['details'])) {
            $body .= "\nDétails supplémentaires :\n" . $validated['details'];
        }

        Mail::raw($body, function ($mail) use ($validated) {
            $mail->to('julie.cariou2605@gmail.com')
                ->from('julie.cariou2605@gmail.com', 'Portfolio - Devis')
                ->replyTo($validated['email'], $validated['name'])
                ->subject('Nouvelle demande de devis');
        });

        return redirect()->back()->with('success-quote', 'Votre demande de devis a été envoyée.');
    }

    public function calculate(Request $request) {
        $serviceIds = $request->input('services', []);

        $total = Service::whereIn('id', $serviceIds)->sum('price');

        return response()->json([
            'total' => number_format($total, 2),
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
