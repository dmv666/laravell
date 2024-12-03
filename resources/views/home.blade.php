<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Home</title>
</head>

<body>
    <article>
        <a href="{{route('proveedor')}}">
            <section>
                <h2>Create Proveedor</h2>
            </section>
        </a>
        <a href="{{route('categoria')}}">
            <section>
                <h2>Create Category</h2>
            </section>
        </a>

    </article>

    <form action="{{route('add_product')}}" method="POST">
        @csrf
        <input type="text" name="product" placeholder="Name of product" required>
        <input type="number min="0"" name="price" placeholder="Price of product" required>
        <input type="number" name="stock" placeholder="Stock of product" required>
        <select name="id_categoria" id="">
            <option value="" disabled selected>Select Category</option>
            @foreach ( $categorias as $categoria ) 
                <option value="{{ $categoria->id }}">{{ $categoria->Nombre}}</option>
                
            @endforeach
        </select>
        <select name="id_proveedor" id="">
            <option value="" disabled selected>Select Provider</option>
            @foreach ($proveedores as $proveedor ) 
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre}}</option>
                
            @endforeach
        </select>
        <input type="submit" value="Add Product">
    </form>

    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Stock</th>
                <th>Creation Date</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($products as $producto )
            <tr>
                <td> {{$producto->id}}</td>
                <td>{{$producto->product}}</td>
                <td>{{$producto->price}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->created_at->format('Y-m-d H:i:s')}}</td>
                <td>
                    <a href="{{route('editProduct.view', $producto->id)}}"class="btn">Edit</a>
                </td>
                <td><a href="{{route('deleteProduct', $producto->id)}}"class="btn-delete">Delete</a></td>
                
            </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
