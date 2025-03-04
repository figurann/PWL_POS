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
        if (!Schema::hasTable('m_kategori')) {
            Schema::create('m_kategori', function (Blueprint $table) {
                $table->bigIncrements('kategori_id'); // bigint(20) unsigned
                $table->string('kategori_kode', 10); // varchar(10)
                $table->string('kategori_nama', 100); // varchar(100)
                $table->timestamps(); // created_at dan updated_at
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kategori');
    }
};
