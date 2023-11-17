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
        $this->call([
            ProfilSeeder::class,
        ]);

        $this->call([
            SkillSeeder::class,
        ]);

        $this->call([
            PortfolioSeeder::class,
        ]);

        $this->call([
            ContactSeeder::class,
        ]);

    }
}
