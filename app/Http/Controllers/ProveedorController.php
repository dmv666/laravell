<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proovedor;

class ProveedorController extends Controller
{
    public function index() {
        $proveedores = Proovedor::all();
        return view('proveedor', compact('proveedores'));
    }

    public function createProveedor(Request $request) {
        $validate = $request->validate([
            'nombre' =>'required|string|max:50',
            'direccion' =>'required',
            'telefono' =>'required',
            'email' =>'required',
            'contacto' =>'required',
            'descripcion' =>'required'
        ]);
        Proovedor::create($validate);
    }

    public function updateProveedor(Request $request) {
        $validate = $request->validate([
            'nombre' =>'required|string|max:50',
            'direccion' =>'required',
            'telefono' =>'required',
            'email' =>'required',
            'contacto' =>'required',
            'descripcion' =>'required'
        ]);
        Proovedor::where('id', $request->id)->update($validate);
    }

    public function deleteProveedor($id) {
        Proovedor::destroy($id);
    }
}
