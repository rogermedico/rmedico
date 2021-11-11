<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_home_path_returns_view_with_correct_parameters()
    {

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewHas(['user' => null]);

        $response = $this->get('/roger');
        $response->assertStatus(200);
        $response->assertViewHas(['user' => 'roger']);

    }
}
