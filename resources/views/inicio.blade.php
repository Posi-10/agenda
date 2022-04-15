@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')
    
@section('contenido')
<div class="container mt-3">
    <div class="row align-items-center justify-content-center">
        <div class="col-10 align-self-center">
            <div class="p-2 bg-light rounded-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="display-5 fw-bold">Aganeda con laravel 8</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <p class="fs-3" style="font-family: 'Kaushan Script', cursive;">
                                            Esta agenda es el examen de Programacion Logica y Funcional de la unidad 2
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('images/moris.webp')}}" class="img-fluid" alt="..." width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection