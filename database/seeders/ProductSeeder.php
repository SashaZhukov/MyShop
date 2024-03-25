<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Jeans',
            'price' => '10',
            'description' => '',
            'img' => '',
            'status' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Short',
            'price' => '15',
            'description' => '',
            'img' => '',
            'status' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'shoes',
            'price' => '40',
            'description' => '',
            'img' => '',
            'status' => '1',
        ]);
    }
}
