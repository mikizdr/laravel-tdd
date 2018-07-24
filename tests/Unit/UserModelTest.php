<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class UserModelTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFullnameAttribute()
    {
        $user = User::create([
            'first_name' => 'Lea',
            'last_name' => 'Zdravkovic',
            'email' => 'lea@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        $this->assertEquals('Lea Zdravkovic', $user->fullname);
    }
}
