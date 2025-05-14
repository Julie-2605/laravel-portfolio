<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class QuoteController extends Controller
{
    // public function showForm()
    // {
    //     $services = Service::all();

    //     return view('devis.form', compact('services'));
    // }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'services' => 'required|array|min:1',
        ]);

        $services = Service::whereIn('id', $request->services)->get();
        $total = $services->sum('price');

        // Envoi d'email ou enregistrement (à adapter selon besoin)
        // Exemple : Mail::to('admin@example.com')->send(new QuoteRequestMail(...));

        return redirect()->back()->with('success', 'Votre demande de devis a bien été envoyée.');
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
