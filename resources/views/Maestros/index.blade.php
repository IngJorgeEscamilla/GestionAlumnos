<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Lista Maestros</h1>
    </header>
    <div>
        <a href="{{url('maestros/create')}}"><button>Nuevo Maestro</button></a>
        <table>
            <tr>
                <td>N°</td>
                <td>Nombre</td>
                <td>Matricula</td>
                <td>Correo Electrónico</td>
                <td>Teléfono</td>
            </tr>
            @foreach ($maestrosList as $key => $maestro)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$maestro->nombre}}</td>
                <td>{{$maestro->matricula}}</td>
                <td>{{$maestro->email}}</td>
                <td>{{$maestro->telefono}}</td>
                <td>
                    <a href="{{ route('maestros.edit', $maestro->id)}}">Actualizar</a>
                    <form action="{{ route('maestros.destroy', $maestro->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('dar baja a')" >Dar baja</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>