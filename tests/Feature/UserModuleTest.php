<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test*/
     function test_it_loads_the_users_list_page()
    {
       $this->withOutExceptionHandling();

        $this->get('/usuarios')
        ->assertStatus(200)
       ->assertSee('Todos los Usuarios');
    }

    /** @test*/
     function carga_lista_usuarios()
    {
       $this->withOutExceptionHandling();

        $this->get('/usuarios')
        ->assertStatus(200)
       ->assertSee('Todos los Usuarios')
       ->assertSee('Joel')
       ->assertSee('Ellie')
       ->assertSee('Tess')
       ->assertSee('Notas');
    }

    /** @test*/
     function carga_lista_usuarios_if_is_empty()
    {
       $this->withOutExceptionHandling();

        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay usuarios registrados');
    }

/** @test*/
    function it_loads_the_users_details_page()

    {
       $this->withOutExceptionHandling();

    	$this->get('/usuarios/5')
    	->assertStatus(200);
    	//->assertSee('Hola usuario: 5');


    }

/** @test*/

    function it_loads_the_new_users_page()

    {
       $this->withOutExceptionHandling();

    	$this->get('/usuarios/nuevo')
    	->assertStatus(200);
    	//->assertSee('Crear usuarios');

    }
}
