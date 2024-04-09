<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Indoor
        DB::table('courts')->insert([
            'court_type_id' => 1,
            'name' => 'Indoor',
            'price' => 300000
        ]);

        DB::table('courts')->insert([
            'court_type_id' => 2,
            'name' => 'Indoor',
            'price' => 250000
        ]);

        DB::table('courts')->insert([
            'court_type_id' => 3,
            'name' => 'Indoor',
            'price' => 200000
        ]);

        // Outdoor
        DB::table('courts')->insert([
            'court_type_id' => 1,
            'name' => 'Outdoor',
            'price' => 250000
        ]);

        DB::table('courts')->insert([
            'court_type_id' => 2,
            'name' => 'Outdoor',
            'price' => 200000
        ]);

        DB::table('courts')->insert([
            'court_type_id' => 3,
            'name' => 'Outdoor',
            'price' => 150000
        ]);
    }
}
