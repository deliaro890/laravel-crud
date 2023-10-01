<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $titulos = ['Tarea_1','Tarea_2'];
        $descripciones = ['Descripcion tarea 1','Descripcion tarea 2'];
        $estados = ['CDMX','Queretaro'];
        $autores = ['autor_1','autor_2'];

        foreach($titulos as $titulo){
            DB::table('tareas')->insert([
                'titulo' => $titulo;
            ]);
        } */

        DB::table('tareas')->insert([
            'titulo' => 'Titulo_1',
            'descripcion' => 'Descripcion tarea 1',
            'estado' => 'CDMX',
            'autor' => 'autor_1'
        ]); //no se pueden varios [],[]

        DB::table('tareas')->insert([
        
            'titulo' => 'Titulo_2',
            'descripcion' => 'Descripcion tarea 2',
            'estado' => 'Queretaro',
            'autor' => 'autor_2'
        ]);

    }
}
