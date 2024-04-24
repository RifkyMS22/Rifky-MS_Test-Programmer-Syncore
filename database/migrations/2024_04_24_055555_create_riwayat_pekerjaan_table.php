<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('riwayat_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('biodata_id');
            $table->foreign('biodata_id')->references('id')->on('biodata')->onDelete('cascade');
            // Tambahkan kolom-kolom lain sesuai kebutuhan
            $table->string('perusahaan');
            $table->string('posisi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pekerjaan');
    }
};
