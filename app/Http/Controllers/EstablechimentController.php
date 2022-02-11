<?php

namespace App\Http\Controllers;

use App\Models\Establechiment;
use App\Models\Categorie;
use Illuminate\Http\Request;

class EstablechimentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       //consulta hacia las categorias
       $categorie = Categorie::all(); 

       return view('establishment.create')
                                         ->with('categorie', $categorie);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establechiment  $establechiment
     * @return \Illuminate\Http\Response
     */
    public function show(Establechiment $establechiment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establechiment  $establechiment
     * @return \Illuminate\Http\Response
     */
    public function edit(Establechiment $establechiment)
    {
      return view('establishment.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Establechiment  $establechiment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establechiment $establechiment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establechiment  $establechiment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establechiment $establechiment)
    {
        //
    }
}
