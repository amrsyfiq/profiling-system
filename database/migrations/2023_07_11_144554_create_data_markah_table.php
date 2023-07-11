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
        Schema::create('data_markah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_data_id');
            $table->string('UJIAN_PENDORONG_SENJATA_MARKAH');
            $table->string('UJIAN_PENDORONG_SENJATA_GRED');
            $table->string('UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH');
            $table->string('UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED');
            $table->string('UJIAN_PENDORONG_IMP_MARKAH');
            $table->string('UJIAN_PENDORONG_IMP_GRED');
            $table->string('UJIAN_PENDORONG_BACA_PETA_MARKAH');
            $table->string('UJIAN_PENDORONG_BACA_PETA_GRED');
            $table->string('UJIAN_PENDORONG_SEMBOYAN_MARKAH');
            $table->string('UJIAN_PENDORONG_SEMBOYAN_GRED');
            $table->integer('PLATUN');
            $table->integer('SEKSYEN');
            $table->string('JANTINA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_markah');
    }
};
