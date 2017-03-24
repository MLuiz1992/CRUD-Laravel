<?php

namespace App\Http\Controllers;

use App\atores;
use Illuminate\Http\Request;

class AtoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $atores = atores::all();
        return view('atores.indexactor', compact('atores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atores.createactor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atores = new atores();
        $atores->name = $request->name;
        $atores->anonasc = $request->anonasc;
        $atores->save();

        return redirect('/atores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\atores  $atores
     * @return \Illuminate\Http\Response
     */
    public function show(atores $atores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\atores  $atores
     * @return \Illuminate\Http\Response
     */
    public function edit(atores $atores)
    {
        $atores = atores::find();
        
        return redirect('/atores/edit')
            ->with('edit', $atores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\atores  $atores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, atores $atores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\atores  $atores
     * @return \Illuminate\Http\Response
     */
    public function destroy(atores $atores)
    {
        //
    }
}
