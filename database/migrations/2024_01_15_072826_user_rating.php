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
        Schema::create('use_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('product_id')->unique();
            $table->string('rating')->nullable();
            $table->timestamp('rating_datetime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
   
    }
};
