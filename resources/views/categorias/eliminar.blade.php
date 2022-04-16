@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar categoria')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Eliminar categoria</h1>
            </div>
        </div>
        <div class="row mt-4 align-items-center justify-content-center">
            <div class="col-6 align-self-center">
                <div class="alert alert-danger" role="alert">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label lead"><i class="fa-solid fa-user-pen me-2"></i>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$categorias->nombre}}">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label lead"><i class="fa-solid fa-audio-description me-2"></i>Descripcion</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="6" disabled>{{$categorias->descripcion}}</textarea>
                        </div>
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#eliminarCategoria"><i class="fa-solid fa-trash-can fa-lg me-2"></i>Eliminar</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-outline-warning rounded-pill"><i class="fa-solid fa-person-walking-arrow-loop-left fa-lg me-2"></i>Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="modal fade" id="eliminarCategoria" tabindex="-1" aria-labelledby="eliminarCategoriaLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Una vez que elimines esta categoria ya no la puedes recuperar
                            </div>
                            <div class="modal-footer">
                                <form action="{{route('categorias.destroy', $categorias->id_categoria)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" method="POST" class="btn btn-outline-danger rounded-pill">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection