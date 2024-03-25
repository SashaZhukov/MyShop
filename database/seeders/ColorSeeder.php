<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
            'name' => 'red'
        ]);
        DB::table('colors')->insert([
            'name' => 'blue'
        ]);
        DB::table('colors')->insert([
            'name' => 'black'
        ]);
    }
}
