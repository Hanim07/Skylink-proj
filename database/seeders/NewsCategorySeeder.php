<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsCategory;


class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $categories = [
            'Software Service',
            'Web & Mobile App',
            'Smart City and Infrastructure',
            'Safety and Security',
            'Enterprise Network Solution',
            'Consulting and Training',
            'ICT Support',
            'GPS Tracking System',
            'Datacenter Facility and Power',
        ];

        foreach ($categories as $name) {
            NewsCategory::firstOrCreate(['name' => $name]);
        }
    }
}
