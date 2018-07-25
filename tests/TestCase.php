<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function authentication()
    {
    	 // logged in user
        $user = factory(User::class)->make();
        $this->actingAs($user);
    }
}
