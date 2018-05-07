<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class loginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testloginPage()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);     //200 means found
    }

}
