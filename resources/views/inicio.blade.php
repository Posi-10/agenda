@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')
    
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary"><i class="fa-brands fa-500px"></i></button>
                    <button type="button" class="btn btn-primary">Middle</button>
                    <button type="button" class="btn btn-primary">Right</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection