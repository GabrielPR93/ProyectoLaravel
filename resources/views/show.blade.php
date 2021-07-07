<title>Real Madrid</title>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md- 8">
            <div class="card">
                <table class='table'>
                
                    @if($jugadores->count())
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Posicion</th>
                            <th>Nacionalidad</th>
                            <th>User_id</th>
                        </tr>
                    </thead>
                    @endif
                    <tbody>
                        @foreach ($jugadores as $jugador)
                        <tr>
                            <td>{{$jugador->nombre}}</td>
                            <td>{{$jugador->posicion}}</td>
                            <td>{{$jugador->nacionalidad}}</td>
                            <td>{{$jugador->user_id}}</td>
                            @if (auth()->user()->rol==0)
                            <td>
                                <form method="POST" action="{{route('destroy',['id'=>$jugador->id])}}">
                                    @method ("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar Jugador</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                   
                </table>
            </div>
            <div>
                <input type='button' class="btn btn-success" value='Añadir Jugador' onclick="location.href = '{{route('create')}}'" />
            </div>
        </div>
    </div>
</div>
@endsection

