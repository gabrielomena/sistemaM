<?php

namespace App\Http\Controllers;

use App\TipoPoliticos;
use Illuminate\Http\Request;

class TipoPoliticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_politicos= TipoPoliticos::all();
        return view('admin.autoridadesForm', compact('tipo_politicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\TipoPoliticos  $tipoPoliticos
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPoliticos $tipoPoliticos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoPoliticos  $tipoPoliticos
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPoliticos $tipoPoliticos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoPoliticos  $tipoPoliticos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPoliticos $tipoPoliticos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoPoliticos  $tipoPoliticos
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPoliticos $tipoPoliticos)
    {
        //
    }
}
