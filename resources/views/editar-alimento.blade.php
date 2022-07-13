<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>EDITANDO: {{$alimento->nome}}</h1>

<form action="{{route('alimento.edit', $alimento->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" name="nome" placeholder="nome" value="{{$alimento->nome}}">
    <input type="text" name="tipo" placeholder="tipo" value="{{$alimento->tipo}}">
    <input type="submit" value="add">
</form>

</body>
</html>