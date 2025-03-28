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
        Schema::create('loadout_armory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('loadout_id')->nullable();
            $table->unsignedBigInteger('armory_id')->nullable();

            $table->foreign('loadout_id')->references('id')->on('loadouts')->onUpdate('cascade');
            $table->foreign('armory_id')->references('id')->on('armory')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loadout_armory');
    }
};
