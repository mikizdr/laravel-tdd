<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Use create() method to populate the DB or make() for testing
        factory(App\Beverage::class, 10)->create();
        factory(App\Purchase::class, 10)->create();
    }
}
