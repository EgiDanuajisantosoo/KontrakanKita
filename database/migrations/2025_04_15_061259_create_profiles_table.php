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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('profile_id')->constrained('profiles')->onDelete('cascade');
            $table->string('nama');
            $table->string('no_telepon');
            $table->text('alamat');
            $table->text('deskripsi')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('foto_profile')->nullable();
            $table->string('instansi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
