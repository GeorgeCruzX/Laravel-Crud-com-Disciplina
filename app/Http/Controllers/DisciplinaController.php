<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Disciplina::all();
        return view('disciplina.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('disciplina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina = new Disciplina();
        $disciplina->nome = $request->nome;
        $disciplina->carga_horaria = $request->carga_horaria;
        $disciplina->save();

        return redirect()->route('disciplina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disciplina = Disciplina::find($id);

        if (isset($disciplina)) {
            return view('disciplina.show', compact(['disciplina']));
        }

        return "<h1>Disciplina não encontrada!</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $disciplina = Disciplina::find($id);

        if (isset($disciplina)) {
            return view('disciplina.edit', compact(['disciplina']));
        }

        return "<h1>Disciplina não encontrada!</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $disciplina = Disciplina::find($id);

        if (isset($disciplina)) {
            $disciplina->nome = $request->nome;
            $disciplina->carga_horaria = $request->carga_horaria;
            $disciplina->save();
            return redirect()->route('disciplina.index');
        }

        return "<h1>Disciplina não encontrada!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disciplina = Disciplina::find($id);

        if (isset($disciplina)) {
            $disciplina->delete();
            return redirect()->route('disciplina.index');
        }

        return "<h1>Disciplina não encontrada!</h1>";
    }
}
