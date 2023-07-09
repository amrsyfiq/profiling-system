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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->text('no_tentera')->nullable();	
            $table->text('nama')->nullable();	
            $table->text('kompeni')->nullable();	
            $table->date('tarikh_lahir')->nullable();	
            $table->text('no_ic_awam')->nullable();	       
            $table->text('umur')->nullable();	       
            $table->text('negeri_kelahiran')->nullable();	
            $table->text('status_perkahwinan')->nullable();	
            $table->text('jumlah_anak')->nullable();	
            $table->text('agama')->nullable();	
            $table->text('bangsa')->nullable();	
            $table->text('keputusan_SPM')->nullable();	
            $table->text('kelayakan_akademik_tertinggi')->nullable();	
            $table->text('bidang_pengajian')->nullable();	
            $table->text('pusat_pengajian')->nullable();	
            $table->text('CGPA')->nullable();	
            $table->text('sukan')->nullable();	
            $table->text('muzik')->nullable();	
            $table->text('pekerjaan_sebelum_masuk_tentera')->nullable();	
            $table->text('bahasa')->nullable();	
            $table->text('tinggi')->nullable();	
            $table->text('berat')->nullable();	
            $table->text('BMI')->nullable();	
            $table->text('kemahiran_membaca_alquran')->nullable();	
            $table->text('strength_and_weakness')->nullable();	
            $table->text('pemilihan_KOR_pilihan_pertama')->nullable();	
            $table->text('pemilihan_KOR_pilihan_kedua')->nullable();	
            $table->text('pemilihan_KOR_pilihan_ketiga')->nullable();	
            $table->text('berminat_menyertai_pasukan_khas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
