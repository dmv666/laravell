<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categoria', compact('categorias'));
    }
    public function createCategories(Request $request){
        $validate = $request->validate([
            'Nombre' =>'required|unique:categorias|max:255',
            'Descripcion' =>'required'
        ]);
        Categoria::create( $validate );
    }
    public function setCategories(Request $request){
        $category = $request->validate([
            'nombre' =>'required|max:255',
            'descripcion' =>'required'
        ]);
        Categoria::where('id', $request-> id)->update($category);
    }

    public function deleteCategories($id){
        Categoria::destroy($id);
    }

}
