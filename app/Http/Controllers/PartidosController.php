<?php

namespace App\Http\Controllers;

use App\Partido;
use Illuminate\Http\Request;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos= Partido::all();
        return view("admin.partidos", compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partidosForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = Partido::create($request->all());
   /*     try {
            $partido = Partido::create([
                'sigla' => $request->sigla,
                'descricao' => $request->descricao
            ]);

            if ($partido) {
                $request->session()->flash('status', 'Partido cadastrado com sucesso.');
            } else {
                $request->session()->flash('status-not', 'Ocorreu um erro ao cadastrar partido.');
            }
        } catch (\Exception $e) {
            $request->session()->flash('status-not', 'Ocorreu um erro ao cadastrar partido. ' . $e->getMessage());
        }*/

        return redirect()->route('partidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function show(Partido $partido)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function edit(Partido $partido)
    {
        /*dd($partido);*/
        return view(admin.partidosForm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partido  $partido
     * @return \Illuminate\Http\Response
     */
    public function delete(Partido $partido)
    {
        dd($partido);
        $partido->delete();
        return redirect()->route('partidos');
    }
}
