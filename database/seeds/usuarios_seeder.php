<?php

use App\Usuario;
use App\Profession;
use Illuminate\Database\Seeder;

class usuarios_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	//Con esta esta linea de comando se puede hacer un SELECT que se muestra en consola de la DB

    	//$id_professions = DB::select('SELECT id FROM profession WHERE title = "Desarrollador Backend"');

    	//Usa esta linea para mostrar el resultado

    	//dd($id_professions);
        

        //Siempre buscando la proteccion de la DB se debe utilizar el segundo argumento de la siguiente forma


        //$id_professions = DB::select('SELECT id FROM profession WHERE title = ?', ['Desarrollador Backend']);

        
        //Aca estoy obteniendo 2 ids de la tabla profession y estamos usando un query de forma tradicional
        $id_professions = DB::select('SELECT id FROM profession LIMIT 3');


        //Para obtener el mismo resultado usando Eloquent ORM podemos usar la siguiente sentencia.
        //$id_professions = Profession::value('id')->get('id')->take(2);

        //dd($id_professions);

        //dd($id_professions[0]->id);

        DB::table('users')->insert([

        	'name' => 'Pepe Nomas',
        	'email' => 'pepe.nomas@gmail.com',
        	'password' => bcrypt('laravel'),

        	//Aca puedes insertar la llave foranea de la otra tabla con respecto a los usuarios de la siguiente forma
        	'fk_profession' => $id_professions[0]->id


        	]);

            // Usando el modelo Eloquent ORM

        Usuario::create([

            'name' => 'Wolverine',
                        'email' => 'wolerine@xgen.com',
                        'password' => bcrypt('wolverine'),

                        //Aca puedes insertar la llave foranea de la otra tabla con respecto a los usuarios de la siguiente forma
                        'fk_profession' => $id_professions[1]->id,

            ]);

        Usuario::create([


            'name' => 'Magneto',
                        'email' => 'magnetp@xgen.com',
                        'password' => bcrypt('magneto'),

                        //Aca puedes insertar la llave foranea de la otra tabla con respecto a los usuarios de la siguiente forma
                        'fk_profession' => $id_professions[2]->id

            ]);



    }
}
