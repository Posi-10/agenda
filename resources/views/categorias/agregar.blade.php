@extends('../layouts/agenda')

@section('tituloPagina', 'Agregar categoria')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Agregar nueva categoria</h1>
            </div>
        </div>
        <div class="row mt-4 align-items-center justify-content-center">
            <div class="col-6 align-self-center">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label lead"><i class="fa-solid fa-user-pen me-2"></i>Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label lead"><i class="fa-solid fa-audio-description me-2"></i>Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="6" required></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-outline-success rounded-pill"><i class="fa-solid fa-circle-plus fa-lg me-2"></i>Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection