@extends('layouts/agenda')

@section('tituloPagina', 'Agregar contacto')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Agregar nuevo contacto</h1>
            </div>
        </div>
        <div class="row mt-4 align-items-center justify-content-center">
            <div class="col-8 align-self-center">
                <div class="alert alert-success" role="alert">
                    <form action="{{route('contactos.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="container">
                            <div class="row my-2">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="apellido_paterno" class="form-label lead"><i class="fa-solid fa-signature me-2"></i>Apellido paterno</label>
                                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido_materno" class="form-label lead"><i class="fa-solid fa-signature me-2"></i>Apellido materno</label>
                                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label lead"><i class="fa-solid fa-user-pen me-2"></i>Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label lead"><i class="fa-solid fa-at me-2"></i>E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label lead"><i class="fa-solid fa-phone me-2"></i>Telefono</label>
                                        <input class="form-control" id="telefono" type="tel" name="telefono" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label lead" for="categoria"><i class="fa-solid fa-list me-2"></i>Categoria</label>
                                        <select class="form-select" id="categoria" name="categoria" required>
                                                <option selected>Selecciona una opcion</option>
                                            @foreach ($categorias as $item)
                                                <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-grid gap-2">
                                        <button type="success" class="btn btn-outline-success rounded-pill"><i class="fa-solid fa-circle-plus fa-lg me-2"></i>Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection