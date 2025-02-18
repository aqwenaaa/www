<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() //berjalan ketika kita menjalankan migrasi ke database
    {
        Schema::create('items', function (Blueprint $table) { //schema::create untuk membuat tabel baru dengan nama items dan blueprint untuk mendefinisikan kolom id, nama, dan description
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps(); // 
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
