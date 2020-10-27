<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Auth\AuthenticationException;

class ResetPasswordTest extends TestCase
{
    /**
     * prueba de ingreso de cedula del usuario.
     *
     * @return void
     */
    public function testViewEntryIdentify()
    {
        $response = $this->get('/password/reset');

        $response->assertStatus(200)
                 ->assertSee('cedula');
    }

    /**
     * prueba de ingreso de nueva contraseña de seguridad.
     *
     * @return void
     */
    public function testViewEntryNewPasswordSecurity()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
