<?php

namespace Tests\Feature;

use App\Beverage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BeverageTest extends TestCase
{

    // use DatabaseMigrations;
    use RefreshDatabase;

    /**
    * @var Beverage
    */
    private $beverage;

    public function setUp()
    {
        parent::setUp();
        $this->beverage = factory(Beverage::class)->create();
    }

    /**
     * An user can visit a beverage page and views beverages.
     *
     * @test
     */
    public function An_user_can_visit_a_beverage_page_and_views_beverages()
    {
        // user will go to an url
        $response = $this->get('beverage');
        // get beverage name
        $response->assertSee($this->beverage->name);
        // assert status
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_visit_a_single_beverage_page()
    {
        $response = $this->get('/beverage/' . $this->beverage->id);
        $response->assertSee($this->beverage->name);
        $response->assertStatus(200);
    }

}
