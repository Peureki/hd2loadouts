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

            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->json('traits')->nullable();
            $table->json('stats')->nullable();
            $table->string('icon')->nullable();
            $table->integer('armor_penetration')->nullable();
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
