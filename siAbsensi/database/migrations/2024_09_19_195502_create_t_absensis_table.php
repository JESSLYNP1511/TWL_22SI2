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
        Schema::create('t_absensis', function (Blueprint $table) {
            $table->id();
            $table->char("statusAbsensi",length:5);
            $table->date("tanggalAbsensi");
            $table->char("keterangan",length:9);
            $table->integer("pegawai");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_absensis');
    }
};
