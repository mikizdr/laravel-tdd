<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Beverage;
use App\User;
use App\Exceptions\MinorCannotBuyAlcoholicBeverageException;

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
        $this->beverage = factory(Beverage::class)->make();
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

    /** @test */
    public function a_minor_user_cannot_buy_an_alcohol()
    {
        $beverage = factory(Beverage::class)->make([
            'type' => 'Alcoholic'
        ]);

        $user = factory(User::class)->make([
            'age' => 17
        ]);

        $this->actingAs($user);

        $this->expectException(MinorCannotBuyAlcoholicBeverageException::class);
        
        $beverage->buy();
    }
}
