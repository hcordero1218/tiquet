<?php

namespace App\Http\Controllers\Admin;

use App\Estadio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadio = Estadio::all();
        //dd($estadio);
        return view ('admin.estadio.index', compact('estadio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.estadio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'nombre_estadio'=> 'required|max:255',
            'capacidad_estadio' =>'required',
        ]);

        $estadio = Estadio::create([
            'nombre_estadio' => $request->get('nombre_estadio'),
            'capacidad_estadio' => $request->get('capacidad_estadio')
        ]);

        $message = $estadio ? 'Estadio agregado correctamente' : 'Estadio no pudo ser agregado';

        return redirect()->route ('estadio.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function show(Estadio $estadio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadio $estadio)
    {
        return view ('admin.estadio.edit', compact('estadio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadio $estadio)
    {
        $estadio->fill($request->all());
        $update = $estadio->save();

        $message = $update ? 'Estadio actualizado' : 'Estadio no se pudo actualizar';

        return redirect()->route('estadio.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadio $estadio)
    {
        $deleted = $estadio->delete();
        $message = $deleted ? 'Estadio eliminado' : 'Estadio no se pudo eliminar';

        return redirect()->route('estadio.index')->with('message', $message);
    }
}
