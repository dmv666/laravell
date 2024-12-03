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
        $dataView['products'] = $product->getProducto();
        $dataView['categorias'] = $CategoriaService->getCategories();
        $dataView['proveedores'] = $proovedorService->getProveedor();

        return view('home', $dataView);
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
        return redirect()->route('home')->with('status', 'producto creado con exito');
    }
    

    public function editProducto(Request $request) {
        $producto = $request->validate([
            'product' =>'required|unique:productos|max:30',
            'price' =>'required',
            'stock' =>'required'
        ]);
        Producto::where('id', $request-> id)->update($producto);
        return redirect()->route('home')->with('status', 'actualizado con exito');
        
    }
    public function editProductoView($id){
        $producto = Producto::find($id);
        
        
        return view('productoEdit', compact('producto'));
    }

    public function deleteProducto($id) {
        Producto::destroy($id);
    }
}
