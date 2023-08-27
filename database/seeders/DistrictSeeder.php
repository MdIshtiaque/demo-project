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
        (9, 1, 'Coxsbazar', 'কক্সবাজার', '21.44315751', '91.97381741', 'www.coxsbazar.gov.bd'),
        (10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
        (11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
        (12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
        (13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
        (14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
        (15, 2, 'Rajshahi', 'রাজশাহী', '24.37230298', '88.56307623', 'www.rajshahi.gov.bd'),
        (16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
        (17, 2, 'Joypurhat', 'জয়পুরহাট', '25.09636876', '89.04004280', 'www.joypurhat.gov.bd'),
        (18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
        (19, 2, 'Naogaon', 'নওগাঁ', '24.83256191', '88.92485205', 'www.naogaon.gov.bd'),
        (20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
        (21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
        (22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
        (23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
        (24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
        (25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
        (26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
        (27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
        (28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
        (29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
        (30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
        (31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
        (32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
        (33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
        (34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
        (35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
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
