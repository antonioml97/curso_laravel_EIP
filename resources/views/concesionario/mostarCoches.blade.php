@extends('app')

@section('title' , 'Mostar Coches')

@section('content')
    <form action="{{ route('showAllCochesBrand') }}" method="POST">
        @csrf
        <label for="">Marca:</label>
        <input type="text" name="marca">
        <input type="submit" value="Find">
    </form>

    <form action="{{ route('showAllCochesPower') }}" method="POST">
        @csrf
        <label for="">Potencia:</label>
        <input type="text" name="potencia">
        <input type="submit" value="Find">
    </form>

    <form action="{{ route('showAllCochesPowerIntervalo') }}" method="POST">
        @csrf
        <label for="">Potencia 1:</label>
        <input type="text" name="potencia1">

        <label for="">Potencia 2:</label>
        <input type="text" name="potencia2">

        <input type="submit" value="Find">
    </form>

    <form action="{{ route('showVentas') }}" method="POST">
        @csrf
        <label for="">Email que ha comprado el coche:</label>
        <input type="text" name="user_compra">

        <label for="">Matricula del vehiculo:</label>
        <input type="text" name="matricula_vehiculo">

        <input type="submit" value="Find">
    </form>

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
