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
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id'); //pk
            $table->unsignedBigInteger('kategori_id')->index(); //indexing untuk ForeighnKey
            $table->string('barang_kode', 10)->unique(); //unique untuk memastikan tidak ada username yang sama
            $table->string('barang_nama', 100);
            $table->unsignedBigInteger('harga_beli');
            $table->unsignedBigInteger('harga_jual');
            $table->timestamps();

            //Mendefinisikan foreighn key pada kolom level_id mengacu pada kolom level_id di tabel m_level
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
