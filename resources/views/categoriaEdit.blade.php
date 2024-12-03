<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Edit Categoria</title>
</head>
<body>
    <form action="{{route('editCategoria', $categorias->id)}}" method="post">
        @csrf
        <input name="id" value="{{$categorias->id}}" hidden>
        <input type="text" name="nombre" placeholder="{{$categorias->Nombre }}" required>
        <textarea name="descripcion" placeholder="{{$categorias->Descripcion}} " cols="30" rows="10" required></textarea>
        <input type="submit" value="Actualizar categoria">
    </form>
</body>
</html>