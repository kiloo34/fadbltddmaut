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
        Schema::create('villager_criterias', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('villager_id');
            $table->unsignedBigInteger('criteria_id');
            $table->float('value');
            $table->integer('conversion');

            $table->foreign('villager_id')->references('id')->on('villagers');
            $table->foreign('criteria_id')->references('id')->on('criterias');

            $table->timestamps();

            $table->integer('updated_by');
            $table->integer('created_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villager_criterias');
    }
};
