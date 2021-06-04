<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnfermedadClase;

class Enfermedad extends Model {
    use HasFactory;
    
    protected $fillable = [
        "nombre_enfermedad",
        "usuario_id",
        "infermedad_clase_id",
        "detalle"
    ];

    public function claseenfermedad() {
    	return $this->belongsTo(
    		EnfermedadClase::class, 
    		'infermedad_clase_id'
    	);
	}
}
