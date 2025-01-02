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
            $table->string("name");
            $table->text("description");
            $table->bigInteger("user_id")->unsigned();
            $table->bigInteger("product_category_id")->unsigned();
            $table->smallInteger("stock");
            $table->decimal("price", total: 10, places: 2);
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("product_category_id")->references("id")->on("product_categories");
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
