<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_investidor_landing_returns_ok(): void
    {
        $this->get('/planejamento')->assertOk();
    }

    public function test_assessores_landing_returns_ok(): void
    {
        $this->get('/assessores')->assertOk();
    }

    public function test_home_shows_audience_split(): void
    {
        $this->get('/')->assertOk()->assertSee('Cliente / investidor', false);
    }
}
