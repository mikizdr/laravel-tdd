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
     * @var Beverage
     */
    private $beverage;

    public function setUp()
    {
        parent::setUp();
        $this->beverage = factory(\App\Beverage::class)->make();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBeverageHasName()
    {
        $this->assertNotEmpty($this->beverage->name);
    }
    public function testBeverageHasType()
    {
        $this->assertNotEmpty($this->beverage->type);
    }
}
