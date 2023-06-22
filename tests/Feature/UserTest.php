<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * Testa a rota GET /users.
     */
    public function testGetUsers()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }

    /**
     * Testa a rota GET /users/{id}.
     */
    public function testGetUserById()
    {
        $user = User::factory()->make();

        $response = $this->get('/api/users/' . $user->id);

        $response->assertStatus(200);
    }
}
