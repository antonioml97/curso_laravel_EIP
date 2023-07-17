@extends('app')

@section('title' , 'Updating car')

@section('content')

    <form action="{{route('updateCar')}}" method="POST">
        @csrf
        <label for="">Marca:</label>
        <input type="text" name="marca" value="{{$coche->marca}}">
        <label for="">Modelo:</label>
        <input type="text" name="modelo" value="{{$coche->modelo}}">
        <label for="">Potencia:</label>
        <input type="number" name="potencia" value="{{$coche->potencia}}">
        <label for="">Matricula:</label>
        <input type="text" name="matricula" value="{{$coche->matricula}}">
        <input type="submit" value="Cambie los datos">
    </form>
@endsection
