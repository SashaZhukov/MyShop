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
            'name' => 'red',
            'hex_code' => '#FF0000'
        ]);
        DB::table('colors')->insert([
            'name' => 'blue',
            'hex_code' => '#00FFE4'
        ]);
        DB::table('colors')->insert([
            'name' => 'black',
            'hex_code' => '#000000'
        ]);
    }
}
