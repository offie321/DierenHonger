<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('leds')->insert([
            'led_is_on' => 0,
        ]);

        DB::table('counts')->insert([
            'times_pressed' => 0,
        ]);
    }
}
