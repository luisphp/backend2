<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      // Se puede pasar una consulta SQL e tipo insert sencilla como se muestra a continuacion

      DB::insert('INSERT INTO profession (title) VALUES ("Desarrollador ASM")');


      // Sepuede pasar una consulta para protege la DB como se muestra a continuacion

      DB::insert('INSERT INTO profession (title) VALUES (?)', ['Desarrollador Full Stack']);
      

      // Tambien se puede pasar una consulta SQL con varias entradas como se muestra a continuacion

     DB::insert('INSERT INTO profession (title) values (:title)',['title' => 'Desarrollador Backend'] );




        // DB::table('profession')->insert([
        //
        //   'title' => 'Desarrollador Backend',
        // ]);


      //Utilizando el ORM de Laravel:

      Profession::create([
        
           'title' => 'Desarrollador Angular',
         ]);




    }
}
