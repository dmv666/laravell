<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorys PHP</title>
</head>

<body>

    <a href="{{route('home')}}">
        <section>
            <h2>Crear Producto</h2>
        </section>
    </a>

    <form action="{{route('add_categoria')}}" method="post">
        <input type="text" name="nombre" placeholder="nombre proveedor">
        <textarea name="descripcion" cols="30" rows="10">
        </textarea>
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

                    <td><a href="{{ route('editCategoria', $categoria->id) }}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{ route('deleteCategoria', $categoria->id) }}" class="btn btn-primary">Delete</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
