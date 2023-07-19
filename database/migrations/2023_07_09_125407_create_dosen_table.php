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
<<<<<<<< HEAD:database/migrations/2023_07_09_125407_create_dosen_table.php
        Schema::create('dosen', function (Blueprint $table) {
            $table->increments('id')-> unique();
            $table->string('nama_dosen',50);
            $table->string('alamat',10);
            $table->string('no_hp',10);
            $table->string('bidang_ahli',50);
========
        Schema::create('nilai', function (Blueprint $table) {
            $table->increments('id')-> unique();
            $table->string('id_mhs',10);
            $table->string('id_mt_kuliah',10);
            $table->string('id_dosen',10);
            $table->string('nilai',10);
>>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889:database/migrations/2023_07_09_125642_create_nilai_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_07_09_125407_create_dosen_table.php
        Schema::dropIfExists('dosen');
========
        Schema::dropIfExists('nilai');
>>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889:database/migrations/2023_07_09_125642_create_nilai_table.php
    }
};
