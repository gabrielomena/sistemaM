<?php

namespace App\Http\Controllers;

use App\Ano;
use App\Exame;
use App\Hospital;
use App\Leito;
use App\Municipio;
use App\Veiculo;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $hospitals=Hospital::all();
       return view('admin.hospitals', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anos= Ano::all();
        $municipios= Municipio::all();
        return view('admin.hospitalsForm',compact('municipios','anos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $hospitals=Hospital::create($request->all());

        $leitos=[];
        $leitos["hospital_id"]=$hospitals->id;
        $leitos["leito_clinico"]=$request["leito_clinico"];
        $leitos["leito_cirurgico"]=$request["leito_cirurgico"];
        $leitos["leito_obstetrico"]=$request["leito_obstetrico"];
        $leitos["leito_pediatrico"]=$request["leito_pediatrico"];
        $leitos["leito_outro"]=$request["leito_outro"];
        $leitos["suporte_ventilatorio"]=$request["suporte_ventilatorio"];
        $leitos["uci_adulto"]=$request["uci_adulto"];
        $leitos["uci_pediatrico"]=$request["uci_pediatrico"];
        $leitos=Leito::create($leitos);

        $exames=[];
        $exames["hospital_id"]=$hospitals->id;
        $exames["ano_id"]=$request["ano_id"];
        $exames["mamografia"]=$request["mamografia"];
        $exames["ultrassonografia"]=$request["ultrassonografia"];
        $exames["raio_x"]=$request["raio_x"];
        $exames["eletrocardiograma"]=$request["eletrocardiograma"];
        $exames=Exame::create($exames);

        $veiculos=[];
        $veiculos["hospital_id"]=$hospitals->id;
        $veiculos["administrativo"]=$request["administrativo"];
        $veiculos["ambulancia_terrestre"]=$request["ambulancia_terrestre"];
        $veiculos["ambulancia_fluvial"]=$request["ambulancia_fluvial"];
        $veiculos["existente"]=$request["existente"];
        $veiculos["funcional"]=$request["funcional"];
        $veiculos=Veiculo::create($veiculos);

        return redirect()->route('hospitals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospitais
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospitais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospitais
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospitais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospitais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospitais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospitals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospitals)
    {

        $veiculos=Veiculo::where('hospital_id',$hospitals->id)->get();
        $veiculos->delete();


        $leitos=Leito::find($hospitals->id);
        $leitos->delete();

        $exames=Exame::find($hospitals->id);
        $exames->delete();

        $hospitals->delete();
    }
}
