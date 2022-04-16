@extends('layouts/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Contactos</h1>
            </div>
        </div>
        <div class="row my-2">
            <div class="col">
                <a href="{{route('contactos.create')}}" class="btn btn-outline-success rounded-pill"><i class="fa-solid fa-circle-plus fa-lg me-2"></i>Agregar</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <table class="table table-striped table-hover table-borderless table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="lead">Apellido paterno</th>
                            <th scope="col" class="lead">Apellido materno</th>
                            <th scope="col" class="lead">Nombre</th>
                            <th scope="col" class="lead">Telefono</th>
                            <th scope="col" class="lead">E-mail</th>
                            <th scope="col" class="lead">Categoria</th>
                            <th scope="col" class="lead">Editar</th>
                            <th scope="col" class="lead">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection