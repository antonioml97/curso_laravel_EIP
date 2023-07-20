<div>
    <form wire:submit.prevent="addCoche">
        @csrf
        <label for="">Marca</label>
        <input type="text" wire:model="marca">
        <label for="">Modelo</label>
        <input type="text" wire:model="modelo">
        <label for="">Potencia</label>
        <input type="number" wire:model="potencia">
        <label for="">Matricula</label>
        <input type="text" wire:model="matricula">
        <input type="submit" value="Add car">
    </form>

    <div>
        <p> Prueba de mensaje: {{ $mensaje }}</p>
    </div>

    <span wire:loading wire:target="addCoche" > Agregando.. </span>

    <p wire:model="errores" style="color:red;"> {{$errores}}  </p>

    <table>
        <thead>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Potencia</th>
            <th>Matricula</th>
        </thead>
        <tbody>
            @foreach ( $coches as $coche)
            <tr>
                <td> {{ $coche->marca }}</td>
                <td> {{ $coche->modelo }}</td>
                <td> {{ $coche->potencia }}</td>
                <td> {{ $coche->matricula }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
