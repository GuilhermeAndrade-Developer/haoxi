<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoleTest extends TestCase
{
    /**
     @test
     */
    public function check_status_connection()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
