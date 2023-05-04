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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropColumn('kelas'); //menghapus kolom kelas
            $table->unsignedBigInteger('kelas_id')->nullable(); //menambahkan foreign key di kolom kelas_id
            $table->foreign('kelas_id')->references('id')->on('kelas'); //menambahkan foreign key di kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswa', function(Blueprint $table){
            $table->string('kelas');
            $table->dropForeign(['kelas_id']);
        });
    }
};
