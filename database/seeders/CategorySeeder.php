<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            'name' => 'To Do',
            'id' => '1'
        ]);

        DB::table('categories')->insert([
            'name' => 'Done',
            'id' => '2'
        ]);
    }
}
