<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Edit Proveedor</title>
</head>
<body>
    <form action="{{route('editProveedor', $proveedor->id)}}" method="post">
        @csrf
        <input name="id" value="{{$proveedor->id}}" hidden>
        <input type="text" name="nombre" placeholder="{{$proveedor->nombre}}" required>
        <input type="text" name="direccion" placeholder="{{$proveedor->direccion}}" required>
        <input type="tel" name="telefono" placeholder="{{$proveedor->telefono}}" required>
        <input type="email" name="email" placeholder="{{$proveedor->email}}">
        <input type="tel" name="contacto" placeholder="{{$proveedor->contacto}}" required>
        <textarea name="descripcion" cols="30" rows="10" placeholder="{{$proveedor->descripcion}}"></textarea>
        <input type="submit" value="Editar proveedor">
    </form>
</body>
</html>