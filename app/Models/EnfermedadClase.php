<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnfermedadClase extends Model {
    use HasFactory;
    protected $table = 'enfermedad_clases';
    
    protected $fillable = [
        "nombre",
    ];
    
}
