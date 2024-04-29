<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuelos</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Asientos por vuelo</h1>
        <br>
        <div>
            <h3>Numero de vuelo</h3>
            <input type="text" value="{{$numero}}" readonly>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Tipo Asiento</th>
                    <th>Numero Asiento</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($vueloAsientos as $vueloAsiento)
                    <tr>
                        <td>{{$vueloAsiento->idTipoAsiento}}</td>
                        <td>{{$vueloAsiento->numeroAsiento}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div>
            <a class="btn btn-warning" href="{{route('vuelos.home')}}">Volver</a>
        </div>
    </div>
</body>
</html>