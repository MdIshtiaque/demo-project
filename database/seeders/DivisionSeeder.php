<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert("INSERT INTO divisions (id, name) VALUES
            (1, 'Chattagram'),
            (2, 'Rajshahi'),
            (3, 'Khulna'),
            (4, 'Barisal'),
            (5, 'Sylhet'),
            (6, 'Dhaka'),
            (7, 'Rangpur'),
            (8, 'Mymensingh')
        ");
    }
}
