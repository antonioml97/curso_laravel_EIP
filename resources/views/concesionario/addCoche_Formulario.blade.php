@extends('app')

@section('title', "Formulario añadir coche")

@section('content')
    <form action="{{ route('addCoche')}}" method="POST">
        @csrf

        <label for="">Marca:</label>
        <input type="text" name="marca">
        <label for="">Modelo:</label>
        <input type="text" name="modelo">
        <label for="">Potencia:</label>
        <input type="number" name="potencia">

        <input type="submit" value="Enviar datos">
    </form>
@endsection
