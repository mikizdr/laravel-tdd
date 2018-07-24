<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BeverageTest extends TestCase
{
    use Databasemigrations;
    // use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $beverage = factory(\App\Beverage::class)->make();
        // dd($beverage);
        $name = $beverage->name;
        $this->assertNotEmpty($name);
    }
}
