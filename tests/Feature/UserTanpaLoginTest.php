<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTanpaLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserTanpaLoginTest()
    {
        $response = $this->get('/home');

        $response->assertRedirect(route('login'));
    }
}
