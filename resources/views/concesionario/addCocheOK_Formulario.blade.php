@extends('app')

@section('title', "Respuesta formulario añadir")

@section('content')
    @if( $id > 0)
        @component('alert' , ['type' => 'succes'])
            <p>  Se ha añadido correctamente</p>
        @endcomponent
    @else
        @component('alert' , ['type' => 'danger'])
            <p>  Hay un error.</p>
        @endcomponent
    @endif
@endsection
