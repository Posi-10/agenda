@extends('layouts/agenda')

@section('tituloPagina', 'Categorias')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Categorias</h1>
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
                <a href="{{route('categorias.create')}}" class="btn btn-outline-success rounded-pill"><i class="fa-solid fa-circle-plus fa-lg me-2"></i>Agregar</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <table id="tablasCategorias" class="table table-striped table-hover table-borderless table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="lead">Nombre</th>
                            <th scope="col" class="lead">Descripción</th>
                            <th scope="col" class="lead">Editar</th>
                            <th scope="col" class="lead">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td><a href="{{route('categorias.edit',$item->id_categoria)}}" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="{{route('categorias.show',$item->id_categoria)}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
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
                    $('#tablasCategorias').DataTable({
                        "language": {
                            "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-MX.json"
                        }
                    });
                });
        </script>    
    @endsection
@endsection