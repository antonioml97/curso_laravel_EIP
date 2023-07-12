@extends('app')

@section('title' , 'Mostar Coches')

@section('content')
    @if ($coches->isEmpty())
        <p> No hay coches </p>
    @else
        <table>
            <thead>
                <tr>
                    <th> Marca </th>
                    <th> Modelo </th>
                    <th> Potencia</th>
                    <th> Matricula</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coches as $coche)
                <tr>
                    <td> {{$coche->marca}}</td>
                    <td> {{$coche->modelo}}</td>
                    <td>{{$coche->potencia}}</td>
                    <td>{{$coche->matricula}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
