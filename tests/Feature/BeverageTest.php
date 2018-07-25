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
     * An user can visit a beverage page and views beverages.
     *
     * @test
     */
    public function An_user_can_visit_a_beverage_page_and_views_beverages()
    {
        $beverage = factory(Beverage::class)->create();
        // user will go to an url
        $response = $this->get('beverage');
        // get beverage name
        $response->assertSee($beverage->name);
        // assert status
        $response->assertStatus(200);
    }

}
