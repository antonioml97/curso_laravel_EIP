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
                    <th> Acciones</th>
                </tr>
            </thead>
            <tbody>
                @each('components.table', $coches , 'coche')
            </tbody>
        </table>
    @endif
@endsection
