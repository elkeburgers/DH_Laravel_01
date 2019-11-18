<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página Home</h1>

 <!-- usando blade  para imprimir a lista de usuarios, apos criacao da funcao em HomeController na Home  -->
    @foreach($listaUsuarios as $usuario)
    <!-- pega o paramento e seleciona a coluna da tabela que quero imprimir os dados -->
    <h2>{{$usuario->nome}}</h2>
    @endforeach
</body>
</html>