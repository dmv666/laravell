<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'contacto', 'descripcion'];
}
