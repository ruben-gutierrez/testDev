 @extends('header')

 @section('content')

 <h1>Asignación de actividades</h1>

 @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
 @endif
 <div class="container">
    <h3>Asignar actividad a {{$name}} </h3>
    <h5>Salario hasta el momento {{ $money }}</h5>
     <div class="row">
         
         <div class="col">
             Trabajando
         </div>
         <div class="col">
            <form action="{{ route('addActivity')}}" method="POST"> 
                @csrf
                <input type="hidden" name="nameUser" value="{{$name}}">
               
               <div class="form-group">
                 <label for="activity">Actividad</label>
                 <input type="text" class="form-control" id="activity" name="name" aria-describedby="activity" required>
                 <small id="emailHelp" class="form-text text-muted">Nombre de la actividad</small>
               </div>
               <div class="form-group">
                 <label for="cost">Costo</label>
                 <input type="number" class="form-control" min="0"  max="100" id="cost" name="cost" required>
                 <small id="cost" class="form-text text-muted">Costo de la actividad entre 0 y 100</small>
               </div>
               
               <button type="submit" class="btn btn-primary">Asignar</button>
           </form>
         </div>
     </div>
 </div>

 

 @stop