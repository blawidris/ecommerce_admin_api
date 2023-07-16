<?php

use App\Models\Category;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 2000);
            $table->string('slug', 2000);
            $table->string('sku', 45)->nullable();
            $table->foreignIdFor(Category::class, 'category_id');
            $table->longText('description');
            $table->integer('quantity');
            $table->string('thumbnail');
            $table->jsonb('media')->nullable();
            $table->jsonb('discount')->nullable();
            $table->jsonb('variantions')->nullable();
            $table->decimal('price', 10, 2);
            $table->jsonb('meta_tag')->nullable();
            $table->timestamps();
            $table->dateTime('publish_date')->nullable();
            $table->foreignIdFor(User::class, 'created_by')->nullable();
            $table->foreignIdFor(User::class, 'updated_by')->nullable();
            $table->softDeletes();
            $table->foreignIdFor(User::class, 'deleted_by')->nullable();
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
