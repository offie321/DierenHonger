<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiloWeight;

class SiloWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiloWeight::create(['weight' => 10.0]);
        SiloWeight::create(['weight' => 50.0]);
        SiloWeight::create(['weight' => 30.0]);
        SiloWeight::create(['weight' => 90.0]);
        SiloWeight::create(['weight' => 14.0]);
    }
}
