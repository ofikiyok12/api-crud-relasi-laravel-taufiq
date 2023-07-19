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
<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2023_07_09_123350_create_mahasiswa_table.php
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id')-> unique();
            $table->string('nama',50);
            $table->string('alamat',50);
            $table->string('no_hp',20);
            $table->string('jurusan',50);
========
        Schema::create('mt_kuliah', function (Blueprint $table) {
            $table->increments('id')-> unique();
=======
        Schema::create('mhs', function (Blueprint $table) {
            $table->increments('id')-> unique();
<<<<<<<< HEAD:database/migrations/2023_07_09_123932_create_matakuliah_table.php
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889
            $table->string('nama_mk',50);
            $table->string('sks',10);
            $table->string('smester',10);
            $table->string('jumlah_mhs',50);
<<<<<<< HEAD
>>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889:database/migrations/2023_07_09_123932_create_matakuliah_table.php
=======
========
            $table->string('nama_mhs',50);
            $table->string('alamat_mhs',50);
            $table->string('no_hp',20);
            $table->string('jurusan',50);
>>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889:database/migrations/2023_07_09_123350_create_mahasiswa_table.php
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
<<<<<<<< HEAD:database/migrations/2023_07_09_123350_create_mahasiswa_table.php
        Schema::dropIfExists('mahasiswa');
========
        Schema::dropIfExists('mt_kuliah');
>>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889:database/migrations/2023_07_09_123932_create_matakuliah_table.php
=======
        Schema::dropIfExists('mhs);
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889
    }
};
