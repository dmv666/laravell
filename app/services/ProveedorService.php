<?php 

namespace App\services;
use App\Models\Proovedor;

class ProveedorService{
    public function getProveedor() {
        $Proveedor = Proovedor::all();
        return $Proveedor;
    }
};