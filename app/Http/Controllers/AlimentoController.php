<?php

namespace App\Http\Controllers;

use App\Models\alimento;
use App\Models\nutriente;
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
        $alimentos = alimento::all();
        return view('/dashboard', compact('alimentos'));
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
        alimento::create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'user_id' => Auth::user()->id
        ]);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit(alimento $alimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alimento $alimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(alimento $alimento)
    {
        //
    }
}
