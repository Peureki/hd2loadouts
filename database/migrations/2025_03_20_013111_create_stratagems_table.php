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
        Schema::create('stratagems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('codes')->nullable();
            $table->string('department')->nullable();
            $table->integer('cooldown')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('unlock_level')->nullable();
            $table->text('description')->nullable();
            $table->integer('armor_penetration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stratagems');
    }
};
