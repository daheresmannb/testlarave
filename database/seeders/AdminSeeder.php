<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
        	"nombres"   => "admin",
            "apellidos" => "admin",
            "rut"       => "12345678",
            "edad"      => 30,
            "sexo"      => 0,
            "email"     => "admin@admin.com",
            "fecha_nac" => "2021-06-03",
            "direccion" => "casa",
            "comuna"    => "casa",
            "region"    => "casa",
            'password'  => Hash::make('12345678'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}