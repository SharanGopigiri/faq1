<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class registerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testregisterPage()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

}
