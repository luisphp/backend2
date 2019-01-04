<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //


    public function index(){

        $users = DB::select('SELECT * FROM users');

        // Puedes usar dd para imprimir los resultados en forma de arreglo.  
        //dd($users);





    	return view('Users', ['Users' => $users]);
    }

    public function show($id){
    	return "Hola usuario:  {$id}";
    }


    public function create(){
    	return "Crear usuarios";
    }


}
