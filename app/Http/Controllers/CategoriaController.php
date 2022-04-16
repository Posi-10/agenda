<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias/inicio', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias/agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = new Categoria();
        $categorias->nombre = $request->post('nombre');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();
        return redirect()->route('categorias.index')->with('save', '¡Agregado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias/eliminar', compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('categorias/editar', compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorias = Categoria::find($id);
        $categorias->nombre = $request->post('nombre');
        $categorias->descripcion = $request->post('descripcion');
        $categorias->save();
        return redirect()->route('categorias.index')->with('update', '¡Actualizado con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();
        return redirect()->route('categorias.index')->with('drop', '¡Eliminado con exito!');
    }
}
