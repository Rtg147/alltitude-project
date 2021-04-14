<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AddUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AddUser::factory()->count(15)->create();
    }
}
