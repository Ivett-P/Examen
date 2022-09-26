@extends('principal')
@section('contenido')

<form action="{{ route('datos.guardar')}}" method="POST">
    @csrf
    <div class="col-md-11">
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Existencia</label>
                    <input type="num" class="form-control" name="existencia" id="existencia">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Precio</label>
                    <input type="num" class="form-control" name="precio" id="precio">
                </div>
                <button type="Submit" class="btn btn-success">Aceptar</button>
            </div>
    </div>
    @endsection