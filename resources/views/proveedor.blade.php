<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Providers PHP</title>
</head>

<body>

    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
}

a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}


.btn {
    display: inline-block;
    padding: 8px 16px;
    margin: 4px;
    border: none;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
}

.btn-primary {
    background-color: #007bff;
    color: white;
}

.btn-primary:hover {
    background-color: #0056b3;
}


section {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-align: center;
    border-radius: 5px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

section:hover {
    background-color: #0056b3;
}


form {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto 20px;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

form input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}


table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

thead {
    background-color: #007bff;
    color: white;
}

thead th {
    padding: 10px;
    text-align: left;
    font-size: 16px;
}

tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

tbody tr:hover {
    background-color: #f1f1f1;
}

tbody td a {
    padding: 5px 10px;
    border-radius: 3px;
    color: white;
}

tbody td a.btn-primary {
    background-color: #28a745;
}

tbody td a.btn-primary:hover {
    background-color: #218838;
}

    </style>

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
                    <td><a href="{{ route('editProveedor', $proveedor->id) }}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{ route('deleteProveedor', $proveedor->id) }}" class="btn btn-primary">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
