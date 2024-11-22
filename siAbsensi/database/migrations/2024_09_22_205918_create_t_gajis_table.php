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
        Schema::create('t_gajis', function (Blueprint $table) {
            $table->id();
            $table->char("kodeGaji",length:4);
            $table->char("PeriodeGaji",length:9);
            $table->text("alamatPegawai");
            $table->char("jenisKelamin",length:6);
            $table->char("tempatLahir",length:30);
            $table->date("tanggalLahir");
            $table->char("agama",length:15);
            $table->integer("jabatan");
            $table->char("noHp",length:15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_gajis');
    }
};
