<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sorteo</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row" style="text-align: center;">
                <h2>Reg&iacute;strate en el sorteo</h2>
                <form action="{{ route('sorteo') }}" method="post">
                    @csrf
                    <label for="nombre">C&eacute;dula:</label>
                    <input type="text" name="cedula" placeholder="C.C" required class="form-control mb-1">
                    <button class="btn btn-primary" type="submit">Participar</button>
                    <br><br>

                    @isset($numero)
                        <h3>Tu n&uacute;mero de participaci&oacute;n es: <b>{{ $numero }}</b></h3>
                    @endisset
                </form>
            </div>
        </div>
    </div>
</body>
</html>
