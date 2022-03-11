<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cod_postales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //llenar con seeder    
        include 'codigos_postales.php';

        foreach($codigos_postales as $clave){
            DB::table('postales')->insert([
                'Id' => $clave["Id"],
                'codigo' => $clave["codigo"],
                'asentamiento' => $clave["asentamiento"],
                'tipo_asenta' => $clave["tipo_asenta"],
                'municipio' => $clave["municipio"],
                'estado' => $clave["estado"],
                'ciudad' => $clave["ciudad"],
            ]);
        }



    }
}
