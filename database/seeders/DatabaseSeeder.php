<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Country;
use App\Models\Customers;
use App\Models\Order;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Country::factory()->create();
        User::factory(10)->create();
        Category::factory(5)->create();
        Product::factory(20)->create();
        Rating::factory(10)->for(Product::factory())->create();
        Customers::factory(10)->create();
        Order::factory(20)->create();
        Shipping::factory(10)->create();
    }
}