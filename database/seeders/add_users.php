<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class add_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('add_users')->insert([
            'name' => Str::random(10),
            
    }
}
