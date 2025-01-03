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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->string("name");
            $table->smallInteger("country_code")->unsigned();
            $table->bigInteger("phone_number")->unsigned();
            $table->string("country");
            $table->string("shipping_address");
            $table->string("billing_address");
            $table->timestamps();
            $table->foreign("country_code")->references("code")->on("countries");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
