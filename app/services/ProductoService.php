<?php 

namespace App\services;
use App\Models\Producto;

class ProductoService{
    public function getProducto() {
        $product = Producto::all();
        return $product;
    }
};