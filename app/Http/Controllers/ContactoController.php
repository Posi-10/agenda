<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contacto;
use App\Models\ContactoListado;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listados = ContactoListado::all();
        return view('contactos/inicio', compact('listados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('contactos/agregar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactos = new Contacto();
        $contactos->id_categoria = $request->post('categoria');
        $contactos->nombre = $request->post('nombre');
        $contactos->apellido_paterno = $request->post('apellido_paterno');
        $contactos->apellido_materno = $request->post('apellido_materno');
        $contactos->telefono = $request->post('telefono');
        $contactos->email = $request->post('email');
        $contactos->save();
        return redirect()->route('contactos.index')->with('save', '¡Agregado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactos = ContactoListado::find($id);
        return view('contactos/eliminar', compact('contactos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactos = Contacto::find($id);
        $categorias = Categoria::all();
        return view('contactos/editar', compact('contactos', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactos = Contacto::find($id);
        $contactos->id_categoria = $request->post('categoria');
        $contactos->nombre = $request->post('nombre');
        $contactos->apellido_paterno = $request->post('apellido_paterno');
        $contactos->apellido_materno = $request->post('apellido_materno');
        $contactos->telefono = $request->post('telefono');
        $contactos->email = $request->post('email');
        $contactos->save();
        return redirect()->route('contactos.index')->with('update', '¡Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactos = Contacto::find($id);
        $contactos->delete();
        return redirect()->route('contactos.index')->with('drop', '¡Eliminado con exito!');
    }
}
