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
        Schema::create('loadout_armors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('loadout_id')->nullable();
            $table->unsignedBigInteger('armor_id')->nullable();

            $table->foreign('loadout_id')->references('id')->on('loadouts')->onUpdate('cascade');
            $table->foreign('armor_id')->references('id')->on('armors')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loadout_armors');
    }
};
