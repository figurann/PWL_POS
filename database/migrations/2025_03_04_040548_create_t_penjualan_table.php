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
        if (!Schema::hasTable('t_penjualan')) {
            Schema::create('t_penjualan', function (Blueprint $table) {
                $table->id('penjualan_id'); // bigint(20) unsigned
                $table->unsignedBigInteger('user_id'); // bigint(20) unsigned
                $table->string('pembeli', 50); // varchar(50)
                $table->string('penjualan_kode', 20); // varchar(20)
                $table->timestamp('penjualan_tanggal'); // datetime
                $table->timestamps(); // created_at dan updated_at

                // Menambahkan foreign key
                $table->foreign('user_id')->references('user_id')->on('m_user')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
