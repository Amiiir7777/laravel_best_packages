<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public static $seeds = [];
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        foreach(self::$seeds as $seed){
            $this->call($seed);
        }
    }

}
