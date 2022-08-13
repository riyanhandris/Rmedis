<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKondisiPasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kondisi_pasien', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pasien');
            $table->string('t_masuk');
            $table->string('t_keluar');
            $table->string('bagian');
            $table->string('kmr');
            $table->string('id_dokter');
            $table->string('a_masuk');
            $table->string('d_masuk');
            $table->string('d_keluar');
            $table->string('dk_utama')->nullable();
            $table->string('dk_tambahan')->nullable();
            $table->string('dk_komplikasi')->nullable();
            $table->string('p_akibat');
            $table->text('k_penyakit');
            $table->text('r_penyakit');
            $table->text('p_fisik');
            $table->text('konsultasi');
            $table->text('jo_tindakan');
            $table->text('terapi');
            $table->string('pasien_keluar');
            $table->string('c_keluar');
            $table->string('prognosa');
            $table->string('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kondisi_pasien');
    }
}
