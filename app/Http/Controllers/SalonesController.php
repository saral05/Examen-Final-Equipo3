<?php

namespace App\Http\Controllers;

use App\Salones;
use Illuminate\Http\Request;

class SalonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salones = Salones::latest()->paginate(10);
        return view('salones.index',['salones' => $salones]);
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
        Salones::create([
            'nombre'=>$request->nombre,
        ]);
        return redirect('/salones')->with('mesage', 'salon agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function show(Salones $salones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salon=Salones::findOrFail($id);
        return view('salones.edit',['salon'=>$salon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_salon)
    {
        $classroom=Salones::findOrFail($id_salon);
        $classroom->update($request->all());
        return redirect('/salones')->with('mesage', 'El salon se a actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salones $salones)
    {
        //
    }
}
