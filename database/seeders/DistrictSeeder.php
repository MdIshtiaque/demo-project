<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert("INSERT INTO districts (id, division_id, name) VALUES
        (1, 1, 'Comilla'),
        (2, 1, 'Feni'),
        (3, 1, 'Brahmanbaria'),
        (4, 1, 'Rangamati'),
        (5, 1, 'Noakhali'),
        (6, 1, 'Chandpur'),
        (7, 1, 'Lakshmipur'),
        (8, 1, 'Chattogram'),
        (9, 1, 'Coxsbazar'),
        (10, 1, 'Khagrachhari'),
        (11, 1, 'Bandarban'),
        (12, 2, 'Sirajganj'),
        (13, 2, 'Pabna'),
        (14, 2, 'Bogura'),
        (15, 2, 'Rajshahi'),
        (16, 2, 'Natore'),
        (17, 2, 'Joypurhat'),
        (18, 2, 'Chapainawabganj'),
        (19, 2, 'Naogaon'),
        (20, 3, 'Jashore'),
        (21, 3, 'Satkhira'),
        (22, 3, 'Meherpur'),
        (23, 3, 'Narail'),
        (24, 3, 'Chuadanga'),
        (25, 3, 'Kushtia'),
        (26, 3, 'Magura'),
        (27, 3, 'Khulna'),
        (28, 3, 'Bagerhat'),
        (29, 3, 'Jhenaidah'),
        (30, 4, 'Jhalakathi'),
        (31, 4, 'Patuakhali'),
        (32, 4, 'Pirojpur'),
        (33, 4, 'Barisal'),
        (34, 4, 'Bhola'),
        (35, 4, 'Barguna'),
        (36, 5, 'Sylhet'),
        (37, 5, 'Moulvibazar'),
        (38, 5, 'Habiganj'),
        (39, 5, 'Sunamganj'),
        (40, 6, 'Narsingdi'),
        (41, 6, 'Gazipur'),
        (42, 6, 'Shariatpur'),
        (43, 6, 'Narayanganj'),
        (44, 6, 'Tangail'),
        (45, 6, 'Kishoreganj'),
        (46, 6, 'Manikganj'),
        (47, 6, 'Dhaka'),
        (48, 6, 'Munshiganj'),
        (50, 6, 'Madaripur'),
        (51, 6, 'Gopalganj'),
        (52, 6, 'Faridpur'),
        (53, 7, 'Panchagarh'),
        (54, 7, 'Dinajpur'),
        (55, 7, 'Lalmonirhat'),
        (56, 7, 'Nilphamari'),
        (57, 7, 'Gaibandha'),
        (58, 7, 'Thakurgaon'),
        (59, 7, 'Rangpur'),
        (60, 7, 'Kurigram'),
        (61, 8, 'Sherpur'),
        (62, 8, 'Mymensingh'),
        (63, 8, 'Jamalpur'),
        (64, 8, 'Netrokona');");
    }
}
