<?php

namespace App\Http\Controllers\Admin;

use App\Producto;
use App\Estado;
use App\Torneo;
use App\Categoria;
use App\Localidad;
use App\Estadio;
use App\Http\Requests\GuardarProductoRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::orderBy('idproducto', 'desc')->paginate(5);
        //dd($producto);
        return view ('admin.producto.index', compact('producto'));

    }

    public function byEstadio($idestadio){
        return Localidad::where('estadio_idestadio', $idestadio)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$estado = Estado::orderBy('idestado_producto', 'desc')->list('idestado_producto','nombre_est_producto');
        $estado = Estado::pluck('nombre_est_producto', 'idestado_producto');
        $torneo = Torneo::pluck('nombre_torneo', 'idtorneo');
        $estadio = Estadio::pluck('nombre_estadio', 'idestadio');
        $localidad = Localidad::all();
        $categoria = Categoria::pluck('nombre_cat_producto', 'idcategoria_producto');
        //dd($producto);
        return view ('admin.producto.create', compact('estado', 'torneo', 'categoria', 'estadio', 'localidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarProductoRequest $request)
    {

        return $request ;
        $data = [
            'nombre_producto'   => $request->get('nombre_producto'),
            'descripcion'       => $request->get('descripcion'),
            'slug'              => str_slug($request->get('nombre_producto','fecha')),
            'fecha'             => $request->get('fecha'),
            'hora'              => $request->get('hora'),
            'categoria_producto_idcategoria_producto' => $request->get('categoria_producto_idcategoria_producto'),
            'estado_producto_idestado_producto' => $request->get('estado_producto_idestado_producto'),
            'torneo_idtorneo'   => $request->get('torneo_idtorneo')
        ];

        $producto = Producto::create($data);

        $message = $producto ? 'Estadio agregado correctamente' : 'Estadio no pudo ser agregado';

        return redirect()->route ('producto.index')->with('message', $message);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $estado = Estado::pluck('nombre_est_producto', 'idestado_producto');
        $torneo = Torneo::pluck('nombre_torneo', 'idtorneo');
        $categoria = Categoria::pluck('nombre_cat_producto', 'idcategoria_producto');
        return view ('admin.producto.edit', compact('producto', 'estado', 'torneo', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(GuardarProductoRequest $request, Producto $producto)
    {
        $producto->fill($request->all());
        $update = $producto->save();

        $message = $update ? 'Estadio actualizado' : 'Estadio no se pudo actualizar';

        return redirect()->route('producto.index')->with('message', $message);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
