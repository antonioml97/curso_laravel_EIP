<tr>
    <td> {{$coche->marca}}</td>
    <td> {{$coche->modelo}}</td>
    <td> {{$coche->potencia}}</td>
    <td >{{$coche->matricula}}</td>
    <td>
        <a href="http://127.0.0.1:8000/deleteCar/{{$coche->id}}"> <button> Borrar </button> </a>
        <a href="http://127.0.0.1:8000/updateCarForm/{{$coche->id}}"> <button> Modificar </button> </a>
    </td>
</tr>
