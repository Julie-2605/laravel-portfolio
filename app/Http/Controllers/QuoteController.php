<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    // public function showForm()
    // {
    //     $services = Service::all();

    //     return view('devis.form', compact('services'));
    // }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'services' => 'required|array|min:1',
            'details' => 'string',
        ]);
        
        Mail::raw($validated['details'], function ($mail) use ($validated) {
            $mail->to('julie.cariou2605@gmail.com')
                ->from('julie.cariou2605@gmail.com', 'Portfolio - Devis')
                ->replyTo($validated['email'], $validated['name'])
                ->subject('Demande de devis pour services : ' . implode(', ', $validated['services']));
        });
        // Mail::send('portfolio', ['name' => $validated['name'], 'body' => 'tesst'], function ($mail) use ($validated) {
        //     $mail->to('julie.cariou2605@gmail.com')
        //      ->from('juile.cariou2605@gmail.com', 'Portfolio - Devis')
        //      ->replyTo($validated['email'], $validated['name'])
        //      ->subject($validated['details']);
        // });

        return redirect()->back()->with('success-quote', 'Votre demande de devis a été envoyée.');
    }

    public function priceQuote(Request $request)
    {
        $services = Service::whereIn('id', $request->services)->get();
        $total = $services->sum('price');

        return $total;
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
