<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('court_types')->insert([
            'name' => 'Regular'
        ]);

        DB::table('court_types')->insert([
            'name' => 'Matras'
        ]);

        DB::table('court_types')->insert([
            'name' => 'Rumput'
        ]);
    }
}
