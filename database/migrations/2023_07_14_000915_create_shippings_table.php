<?php

use App\Models\Country;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'customer_id');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->foreignIdFor(Country::class, 'country_code');
            $table->foreignIdFor(Order::class, 'order_id');
            $table->string('status', 45);
            $table->string('type', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};