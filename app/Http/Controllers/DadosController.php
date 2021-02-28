<?php

namespace App\Http\Controllers;

use App\Dados_municipios;
use Illuminate\Http\Request;

class DadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados_municipios= Dados_municipios::all();
        return view('admin.municipios',compact('dados_municipios'));
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
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function show(Dados_municipios $dados_municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function edit(Dados_municipios $dados_municipios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dados_municipios $dados_municipios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dados_municipios  $dados_municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dados_municipios $dados_municipios)
    {
        //
    }
}
