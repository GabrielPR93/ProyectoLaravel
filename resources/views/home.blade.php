<title>Real Madrid</title>
 @extends('layouts.app')
 @section('content')

 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">Bienvenid@ !!</div>
                 <div>
                  <p>Plantilla Real Madrid 2021-2022 </p>
                    <p>
                    <input type='button' class="btn btn-warning" value='Ir a Plantilla' onclick="location.href = '{{route('show')}}'" />
                    </p>
                 </div>
                 <div>
                 <p>
                 Añadir nuevo jugador a la plantilla
                 </p>
                 <p>
                     <input type='button' class="btn btn-success" value='Añadir Jugador' onclick="location.href = '{{route('create')}}'" />  
                 </p>
                 </div>
               
                 <div>
                 
                 <p>
                 Volver a página de inicio
                 </p>
                 <p>
                 <input type='button' class="btn btn-info" value='Volver a Inicio' onclick="location.href = '{{route('inicio')}}'" />
                 </p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection