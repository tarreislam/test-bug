<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        User::factory()->create();
        User::create([
            'name' => '123',
            'email' => 'test@test.test',
            'password' => '123',
        ]);

        $response->assertStatus(200);
    }
}
