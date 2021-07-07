<title>Real Madrid</title>
@extends('layouts.app')
@section('content')
@include("partials.errors")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Añade un Nuevo Jugador</div>
                <div class="card-body">
                    <form method="POST" action="{{route('store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" />
                            <label for="posicion">Posicion</label>
                            <input type="text" class="form-control" name="posicion" />
                            <label for="nacionalidad">Nacionalidad</label>
                            <input type="text" class="form-control" name="nacionalidad" />
                        </div>
                        <input type="submit" class="btn btn-block btn-dark" value="Añadir un nuevo Jugador">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



