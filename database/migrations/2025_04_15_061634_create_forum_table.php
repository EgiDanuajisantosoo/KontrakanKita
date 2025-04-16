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
        Schema::create('forum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kontrakan_id')->constrained('kontrakan')->onDelete('cascade');
            $table->enum('role', ['Admin', 'Anggota']);
            $table->string('fieldname')->nullable(); // Ganti jika fieldname sebenarnya punya nama khusus
            $table->string('fieldname2')->nullable(); // Ganti juga
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum');
    }
};
