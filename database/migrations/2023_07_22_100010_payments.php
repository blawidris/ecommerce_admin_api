<?php

use App\Models\Customers;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customers::class, 'created_by');
            $table->decimal('amount', 10, 2);
            $table->string('status');
            $table->string('payment_type');
            $table->string('card_type');
            $table->string('card_number');
            $table->string('card_cvv');
            $table->string('card_exp');
            $table->string('reference_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
