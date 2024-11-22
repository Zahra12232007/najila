<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('image');
            $table->bigInteger('nis');
            $table->string('tingkatan');
            $table->string('jurusan'); // Removed the extra space
            $table->string('kelas');
            $table->string('hp'); // Consider changing this to string if phone number
            $table->integer('status'); // 0=tidak aktif 1=aktif
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswas'); // Fixed typo here
    }
};
