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
        Schema::create('kontrakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama');
            $table->text('alamat');
            $table->integer('harga');
            $table->text('deskripsi')->nullable();
            $table->string('tipe_properti');
            $table->integer('kamar_tidur');
            $table->integer('kamar_mandi');
            $table->string('ukuran_properti');
            $table->text('fasilitas_tambahan')->nullable();
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('banner')->nullable();
            $table->string('kelurahan');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->enum('status', ['pending', 'diterima', 'ditolak','tersedia'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontrakan');
    }
};
