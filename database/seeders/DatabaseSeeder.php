<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Country;
use App\Models\CustomerAddresses;
use App\Models\Customers;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\OrderItem;
use App\Models\Payment;
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

        // Country::factory(10)->create();
        // User::factory(10)->create();
        // Customers::factory(10)->create();
        // Category::factory(5)->create();
        // Product::factory(20)->create();
        // Rating::factory(40)->create();
        // Payment::factory(10)->create();
        // Shipping::factory(10)->create();
        // Order::factory(10)->create();
        // OrderItem::factory(50)->create();
        // CustomerAddresses::factory(20)->create();
        // OrderHistory::factory(20)->create();

       $this->call(AdminSeeder::class);
    }
}