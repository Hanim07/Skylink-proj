<?php

namespace Database\Seeders;
// database/seeders/CategoriesTableSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Electronics']);
        Category::create(['name' => 'Software']);
        Category::create(['name' => 'Services']);
    }
}