<?php

namespace Database\Seeders;

use App\Models\BaseDrone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaseDroneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BaseDrone::factory(8)->create();
    }
}
