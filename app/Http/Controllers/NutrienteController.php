<?php

namespace App\Http\Controllers;

use App\Models\Nutriente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NutrienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nutrientes = Nutriente::all();
        return view('/dashboard', compact('nutrientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nutriente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Nutriente::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nutriente  $Nutriente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Nutriente = Nutriente::findOrfail($id);
        return view('nutriente.show', ['nutriente' => $Nutriente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nutriente  $Nutriente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Nutriente = Nutriente::findOrFail($id);
        return view('editar-nutriente', ['nutriente' => $Nutriente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nutriente  $Nutriente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nutriente)
    {
        $NutrienteAlvo = Nutriente::findOrFail ($Nutriente);
        $NutrienteAlvo ->nome = $request ->nome;
        $NutrienteAlvo ->tipo = $request ->tipo;
        $NutrienteAlvo->update();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nutriente  $Nutriente
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nutriente)
    {
        $Nutriente = Nutriente::findOrFail($Nutriente)->delete();
        return redirect()->back();
    }
}

