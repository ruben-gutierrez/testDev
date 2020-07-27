@extends('header')


@section('content')

<h1>Informe  {{$name}}</h1>
{{-- {{ $activity }} --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Actividad</th>
        <th scope="col">Usuario</th>
        <th scope="col">Pago</th>
        <th scope="col">Día</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($activity as $act)
            <tr>
                <th scope="row"> {{ $act->id }} </th>
                <td>{{ $act->name }}</td>
                <td>{{ $act->nameUser }}</td>
                <td>{{ $act->cost }}</td>
                <td>{{ $act->created_at }}</td>
            </tr>
        @endforeach
      
     
    </tbody>
  </table>


@stop