<?php

namespace App\Http\Controllers;

use App\Materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materias::latest()->paginate(10);
        // return $materias;
        return view('materias.index', ['materias' => $materias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Materias::create([
        //     'nombre' => $request->nombre,
        // ]);
        // return redirect('/materias')->with('mesage', 'la categoria se ha agregado exitosamente!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Materias::create([
            'nombre' => $request->nombre,
        ]);
        return redirect('/materias')->with('mesage', 'La materia se a creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(Materias $materias)
    {
        //
    }

    public function edit($id)
    {
        $materias = Materias::findOrFail($id);
        return view('materias.edit', ['materias' => $materias]);
    }


    public function update(Request $request, $id)
    {
        $materias = Materias::findOrFail($id);
        $materias->update($request->all());
        return redirect('/materias')->with('mesage', 'La materia se a actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materias $materias)
    {
        //
    }
    
    /* eliminacion de */
    public function delete(Materias $materias){

        $materias->delete();
        return redirect('/materias')->with('mesageDelete', 'la materia se ha eliminado exitosamente!');


    }
}
