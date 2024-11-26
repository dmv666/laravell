<?php 

namespace App\services;
use App\Models\Categoria;

class CategoriaService{
    public function getCategories() {
        $categorias = Categoria::all()->toArray();
        return $categorias;
    }
};