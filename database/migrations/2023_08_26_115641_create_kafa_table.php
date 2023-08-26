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
        Schema::create('kafe', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->unsignedBigInteger('zemlja_id');
            $table->unsignedBigInteger('tip_id');
            $table->timestamps();

            $table->foreign('zemlja_id')->references('id')->on('zemlje');
            $table->foreign('tip_id')->references('id')->on('tipovi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kafe');
    }
};
