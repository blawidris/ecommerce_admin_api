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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->string('type', 45)->nullable();
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('country_code');
            $table->timestamps();
            $table->foreign('country_code')->constraint()->on('countries')->references('code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_addresses');
    }
};