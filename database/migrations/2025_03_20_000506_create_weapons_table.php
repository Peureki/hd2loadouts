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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreign('id')->references('id')->on('armory')->onUpdate('cascade');

            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->string('damage')->nullable();
            $table->string('armor_penetration')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('recoil')->nullable();
            $table->integer('fire_rate')->nullable();
            $table->json('traits')->nullable();
            $table->string('icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weapons');
    }
};
