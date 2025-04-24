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
        Schema::create('galery_kontrakan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kontrakan_id');
            $table->string('foto_kontrakan');
            $table->foreign('kontrakan_id')->references('id')->on('kontrakan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galery_kontrakan');
    }
};
