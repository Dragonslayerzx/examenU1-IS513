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
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Crear Nuevo Vuelo</h2>
                <br>
                <form action="{{route('vuelos.guardar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="color">Numero:</label>
                        <input type="text" class="form-control" name="numero"/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Origen</label>
                        <input type="text"class="form-control" name="origen"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Destino:</label>
                        <input type="text" class="form-control" name="destino"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Fecha Vuelo:</label>
                        <input type="date" class="form-control" name="fecha"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Cantidad:</label>
                        <input type="number" class="form-control" name="cantidad"/>
                    </div>

                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning" href="{{route('vuelos.home')}}">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>