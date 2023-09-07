<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->truncate();

        DB::table('items')->insert([
            'name' => 'Task 1',
            'category_id' => '1'
        ]);

        DB::table('items')->insert([
            'name' => 'Task 2',
            'category_id' => '1'
        ]);
    }
}
