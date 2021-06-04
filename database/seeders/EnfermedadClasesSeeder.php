<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EnfermedadClasesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    	$tipos_enfermedades = [
    		"oncológicas",
			"infecciosas y parasitarias",
			"sanguineas",
			"sistema inmunitario",
			"endocrinas",
			"Trastornos mentales",
			"sistema nervioso"
    	];
    	for ($i = 0; $i < count($tipos_enfermedades); $i++) { 
    		DB::table('enfermedad_clases')->insert([
	        	"nombre"   => $tipos_enfermedades[$i],
	        ]);
    	}
    }
}