<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('editProduct', $producto->id)}}" method="POST">
        @csrf
        <input type="text" name="product" placeholder="{{$producto -> product }}" required>
        <input type="number min="0"" name="price" placeholder="{{$producto -> price }}" required>
        <input type="number" name="stock" placeholder="{{$producto -> stock }}" required>
       
        <input type="submit" value="Editar producto">
    </form>
    
</body>
</html>