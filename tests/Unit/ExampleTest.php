<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * User model has age attribute
     *
     * @test
     */
    public function user_has_age_attribute()
    {
        $user = factory(User::class)->make();

        $this->assertNotNull($user->age);
    }
}
