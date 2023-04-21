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
        Schema::create('villagers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('dependent');
            $table->string('job');
            $table->string('earnings');
            $table->string('education');
            $table->string('condition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villagers');
    }
};
