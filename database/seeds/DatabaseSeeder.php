<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()


    {

        //Esta linea de codigo se utiliza para eliminar 
        //todos los datos dentro de la DB, debes escribir los 
        //nombres de las tablas.

        $this->truncateTables([
            'profession',
            'users']);

     //Se puede utilizar la siguiente linea de codigo
     //Para mostrar el nombre del seeder (solo muestra ño ejecuta)   

    //	dd(ProfessionSeeder::class);


        //Otra forma de llamar a los seeders...
        // $this->call(UsersTableSeeder::class);


        $this->call(ProfessionSeeder::class);
        $this->call(usuarios_seeder::class);
    }


    protected function truncateTables(array $tables){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        foreach ($tables as $table) {
            DB::table($table)->truncate();


        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }

}
