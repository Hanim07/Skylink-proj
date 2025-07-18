<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Seed news categories first
    $this->call([
        NewsCategorySeeder::class,
        CategoriesTableSeeder::class,
        ProductsSeeder::class,
        P
    ]);

    // Then create a test user
    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);
}

}
