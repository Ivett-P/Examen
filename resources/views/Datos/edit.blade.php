@extends('plantilla')
@section('contenido')

<form action=" {{ route('datos.update', $dat ) }} " method="post">
    @csrf
    @method('PUT')
<div class="col-md-11">
    <form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value=" {{$dat->nombre}} " >
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Descripción</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value=" {{$dat->descripcion}} " >
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="num" class="form-control" name="precio" id="precio" value=" {{$dat->precio}} " >
    </div>
    <div class="form-group">
     <label for="exampleInputPassword1">Existencia</label>
     <input type="num" class="form-control" name="existencia" id="existencia" value=" {{$dat->existencia}} " >
    </div>

            <button type="Submit" class="btn btn-dark">Aceptar</button>

</div>
</div>
@endsection