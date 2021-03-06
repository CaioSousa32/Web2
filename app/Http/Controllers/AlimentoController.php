<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\Nutriente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::all();
        return view('/dashboard', compact('alimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alimento::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimento  $Alimento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Alimento = Alimento::findOrfail($id);
        return view('alimento.show', ['alimento' => $Alimento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimento  $Alimento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Alimento = Alimento::findOrFail($id);
        return view('editar-alimento', ['alimento' => $Alimento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimento  $Alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Alimento)
    {
        $AlimentoAlvo = Alimento::findOrFail ($Alimento);
        $AlimentoAlvo ->nome = $request ->nome;
        $AlimentoAlvo ->tipo = $request ->tipo;
        $AlimentoAlvo->update();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimento  $alAlimentoimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($Alimento)
    {
        $Alimento = Alimento::findOrFail($Alimento)->delete();
        return redirect()->back();
    }
}
