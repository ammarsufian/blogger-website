<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->followingRedirects()->get('/');
        $response->assertStatus(200);
        $params = explode('/', url()->current());
        $this->assertEquals($params[3], app()->getLocale());     
    }
}
