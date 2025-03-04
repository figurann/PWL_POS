<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('m_barang')) {
            Schema::create('m_barang', function (Blueprint $table) {
                $table->id('barang_id'); // bigint(20) unsigned
                $table->unsignedBigInteger('kategori_id'); // bigint(20) unsigned
                $table->string('barang_kode', 10); // varchar(10)
                $table->string('barang_nama', 100); // varchar(100)
                $table->integer('harga_beli'); // int(11)
                $table->integer('harga_jual'); // int(11)
                $table->timestamps(); // created_at, updated_at

                // Menambahkan foreign key
                $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
