<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->post('/create_order');

        $response->assertOk();
    }
}
