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
        if (!Schema::hasTable('t_stok')) {
            Schema::create('t_stok', function (Blueprint $table) {
                $table->id('stok_id'); // bigint(20) unsigned
                $table->unsignedBigInteger('barang_id'); // bigint(20) unsigned
                $table->unsignedBigInteger('user_id'); // bigint(20) unsigned
                $table->timestamp('stok_tanggal'); // datetime
                $table->integer('stok_jumlah'); // int(11)
                $table->timestamps(); // created_at dan updated_at

                // Menambahkan foreign key
                $table->foreign('barang_id')->references('barang_id')->on('m_barang')->onDelete('cascade');
                $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
