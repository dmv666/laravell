<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Categorias PHP</title>
</head>

<body>
    <a href="{{route('home')}}">
        <section>
            <h2>Crear Producto</h2>
        </section>
    </a>

    <form action="{{route('add_categoria')}}" method="post">
        @csrf
        <input type="text" name="Nombre" placeholder="nombre categoria">
        <textarea name="Descripcion" placeholder="descripcion" cols="30" rows="10"></textarea>
        <input type="submit" value="Crear categoria">
    </form>

    <table>
        <thead>
            <tr>
                <th>Categoria ID</th>
                <th>Categoria Name</th>
                <th>Categoria Descripcion</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td> {{ $categoria->id }}</td>
                    <td>{{ $categoria->Nombre }}</td>
                    <td>{{ $categoria->Descripcion }}</td>

                    <td><a href="{{ route('editCategoria.view', $categoria->id) }}" class="btn">Edit</a></td>
                    <td><a href="{{ route('deleteCategoria', $categoria->id) }}" class="btn-delete">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
