<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Home</title>
</head>

<body>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
    
        h2 {
            font-size: 1.5rem;
            margin: 0;
            color: #ffffff;
        }
    
        a {
            text-decoration: none;
            color: #fff;
        }
    
        article {
            display: flex;
            justify-content: space-evenly;
            margin: 20px auto;
        }
    
        article section {
            padding: 15px 25px;
            background-color: #218838;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    
        article section:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        form input, form select {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
    
        form input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
    
        form input[type="submit"]:hover {
            background-color: #218838;
        }
    
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    
        table thead {
            background-color: #007bff;
            color: white;
        }
    
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    
        table tbody tr:hover {
            background-color: #f1f1f1;
        }
    
        table tbody tr td a {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease;
        }
    
        table tbody tr td a:hover {
            color: #0056b3;
        }
    </style>


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
            {{-- @foreach ($proveedores as $proveedor ) 
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre}}</option>
                
            @endforeach --}}
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
            {{-- @foreach ($products as $producto )
            <tr>
                <td> {{$producto->id}}</td>
                <td>{{$producto->product}}</td>
                <td>{{$producto->price}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->created_at->format('Y-m-d H:i:s')}}</td>
                <td>
                    <a href="{{route('editProduct', $producto->id)}}">Editar</a>
                </td>
                <a href="{{route('deleteProduct', $producto->id)}}">Eliminar</a>
            </td>
            <td>
                <a href="#">Actualizar</a>    
            </td>
                
                
            </tr>
            @endforeach --}}

        </tbody>
    </table>

</body>

</html>
