<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\services\ProductoService;
use App\services\ProveedorService;
use App\services\CategoriaService;

class ProductoController extends Controller
{

    public function index(Request $request, ProductoService $product, CategoriaService $CategoriaService, ProveedorService $proovedorService) {
        $products = $product->getProducto();
        $categorias = $CategoriaService->getCategories();
        $proveedores = $proovedorService->getProveedor();

        return view('home', compact('products', 'categorias', 'proveedores'));


    }

    public function createProducto(Request $request) {
        $validate = $request->validate([
            'product' =>'required|unique:productos|max:30',
            'price' =>'required',
            'stock' =>'required',
            'id_categoria' =>'required',
            'id_proveedor' =>'required'
        ]);
        Producto::create($validate);
    }

    public function updateProducto(Request $request, $id) {
        $producto = $request->validate([
            'product' =>'required|unique:productos|max:30',
            'price' =>'required',
            'stock' =>'required',
            'id_categoria' =>'required',
            'id_proveedor' =>'required'
        ]);
        Producto::where('id', $id)->update($producto);
    }

    public function deleteProducto($id) {
        Producto::destroy($id);
    }
}
