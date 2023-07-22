<?php

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
            $table->string('phone_number', 45);
            $table->string('zipcode');
            $table->string('country_code', 3);
            $table->foreignIdFor(Order::class, 'order_id');
            $table->string('shipping_method', 45);
            $table->string('status', 45);
            $table->string('track_code', 45);
            $table->timestamps();
            $table->foreign('country_code')->references('code')->on('countries');
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
