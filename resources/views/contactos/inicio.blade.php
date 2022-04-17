@extends('layouts/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Contactos</h1>
            </div>
        </div>
        @if ($mensaje=Session::get('save'))
            <div class="alert alert-success" role="alert">
                {{$mensaje}}
            </div>
        @endif
        @if ($mensaje=Session::get('update'))
            <div class="alert alert-primary" role="alert">
                {{$mensaje}}
            </div>
        @endif
        @if ($mensaje=Session::get('drop'))
            <div class="alert alert-danger" role="alert">
                {{$mensaje}}
            </div>
        @endif
        <div class="row my-2">
            <div class="col">
                <a href="{{route('contactos.create')}}" class="btn btn-outline-success rounded-pill"><i class="fa-solid fa-circle-plus fa-lg me-2"></i>Agregar</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <table id="tablasContactos" class="table table-striped table-hover table-borderless table-responsive">
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
                        @foreach ($listados as $item)
                        <tr>
                            <td>{{$item->apellido_paterno}}</td>
                            <td>{{$item->apellido_materno}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->nombre_categoria}}</td>
                            <td><a href="{{route('contactos.edit',$item->id_contacto)}}" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="{{route('contactos.show',$item->id_contacto)}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @section('dataTable')
        <script>
                $(()=>{
                    $('#tablasContactos').DataTable({
                        "language": {
                            "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-MX.json"
                        }
                    });
                });
        </script>    
    @endsection
@endsection