<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create();
    }

    /**
     * A basic feature test example.
     */
    public function test_bringing_all_users()
    {

        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJson([
            'data' => true
        ]);
    }
}
