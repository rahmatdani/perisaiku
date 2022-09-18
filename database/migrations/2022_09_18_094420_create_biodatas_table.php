<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nisn");
            $table->string("name");
            $table->string("jenis_kelamin");
            $table->string("alamat");
            $table->string('foto')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string("asal_sekolah");
            $table->string("alamat_sekolah");
            $table->string('mtk');
            $table->string('mtk1');
            $table->string('ipa');
            $table->string('ipa1');
            $table->string('b_ing');
            $table->string('b_ing1');
            $table->string("jalur");
            $table->string("status")->nullable();
            $table->string('jurusan1');
            $table->string('jurusan2');
            $table->string('hp_ortu');
            $table->string('agama');
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
        Schema::dropIfExists('biodatas');
    }
}
