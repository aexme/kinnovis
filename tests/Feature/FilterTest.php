<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FilterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_units_filter()
    {
        $response = $this->get('api/filters/units');

        $response->assertStatus(200);
    }
}
