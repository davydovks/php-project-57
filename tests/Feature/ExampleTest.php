<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testHomePage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
