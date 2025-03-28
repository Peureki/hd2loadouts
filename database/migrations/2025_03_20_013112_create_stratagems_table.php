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
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->json('code')->nullable();
            $table->integer('damage')->nullable();
            $table->integer('armor_penetration')->nullable();
            $table->string('uses')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('fire_rate')->nullable();
            $table->integer('cooldown')->nullable();
            $table->decimal('call_in_time', 10, 2)->nullable();
            $table->json('traits')->nullable();
            $table->string('icon')->nullable();
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
