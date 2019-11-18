<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cidades</title>
</head>
<body>
    
    <h1>Lista de Cidades</h1>
@foreach($listaCidades as $cidade)
    <h2>{{$cidade->nome}}</h2>
    @endforeach

</body>
</html>