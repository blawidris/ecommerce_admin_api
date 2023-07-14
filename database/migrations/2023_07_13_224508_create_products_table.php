<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 2000);
            $table->string('slug', 2000);
            $table->string('sku', 45);
            $table->longText('description');
            $table->integer('quantity');
            $table->string('image_thumbnail');
            $table->jsonb('media')->nullable();
            $table->jsonb('discount');
            $table->jsonb('variantions');
            $table->decimal('price',10,2);
            $table->string('meta_title')->nullable();
            $table->string('meta_descripiton')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->timestamps();
            $table->foreignIdFor(User::class, 'created_by');
            $table->foreignIdFor(User::class, 'updated_by');
            $table->softDeletes();
            $table->foreignIdFor(User::class, 'deleted_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
