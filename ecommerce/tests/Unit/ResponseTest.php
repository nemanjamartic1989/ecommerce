<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ResponseTest extends TestCase
{

    public function testExample()
    {
        $response = $this->get("/cart"); // test response of method for cart url.
        $response->assertStatus(200);
    }
}
