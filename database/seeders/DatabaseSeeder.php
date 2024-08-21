<?php

namespace Database\Seeders;

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
        $this->call(UserAdminSeed::class);
        $this->call(CitySeed::class);
        $this->call(CategorySeed::class);
    }
}
