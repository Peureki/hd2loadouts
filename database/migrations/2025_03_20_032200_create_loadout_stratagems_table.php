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
        Schema::create('loadout_stratagems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('loadout_id')->nullable();
            $table->unsignedBigInteger('stratagem_id')->nullable();

            $table->foreign('loadout_id')->references('id')->on('loadouts')->onUpdate('cascade');
            $table->foreign('stratagem_id')->references('id')->on('stratagems')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loadout_stratagems');
    }
};
