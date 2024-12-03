<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Providers PHP</title>
</head>

<body>
    <a href="{{route('home')}}">
        <section>
            <h2>Crear Producto</h2>
        </section>
    </a>

    <form action="{{route('add_proveedor')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre proveedor">
        <input type="text" name="direccion" placeholder="direccion proveedor">
        <input type="tel" name="telefono" placeholder="telefono proveedor">
        <input type="email" name="email" placeholder="email proveedor">
        <input type="tel" name="contacto" placeholder="contacto proveedor">
        <textarea name="descripcion" cols="30" rows="10">
        </textarea>
        <input type="submit" value="Crear proveedor">
    </form>

    <table>
        <thead>
            <tr>
                <th>Proveedor ID</th>
                <th>Proveedor Name</th>
                <th>Proveedor Direccion</th>
                <th>Proveedor Telefono</th>
                <th>Proveedor Email</th>
                <th> Proveedor Contacto</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td> {{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->email }}</td>
                    <td>{{ $proveedor->contacto }}</td>
                    <td><a href="{{ route('editProveedor.view', $proveedor->id) }}" class="btn">Edit</a></td>
                    <td><a href="{{ route('deleteProveedor', $proveedor->id) }}" class="btn-delete">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
