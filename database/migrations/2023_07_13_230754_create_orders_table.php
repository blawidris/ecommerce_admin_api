<?php

use App\Models\Customers;
use App\Models\Payment;
use App\Models\Shipping;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->foreignIdFor(Customers::class, 'user_id');
            $table->foreignIdFor(Payment::class, 'payment_id');
            $table->foreignIdFor(Shipping::class, 'shipping_id');
            $table->decimal('total_price', 10, 2);
            $table->string('status', 45)->default('pending');
            $table->timestamps();
            $table->foreignIdFor(User::class, 'updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
