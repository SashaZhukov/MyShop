<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'shoes',
        ]);

        DB::table('categories')->insert([
            'name' => 'Jeans',
        ]);

        DB::table('categories')->insert([
            'name' => 'T-shirt',
        ]);
    }
}
