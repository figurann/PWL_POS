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
        if (!Schema::hasTable('m_user')) {
            Schema::create('m_user', function (Blueprint $table) {
                $table->id('user_id'); // bigint unsigned
                $table->unsignedBigInteger('level_id'); // bigint unsigned
                $table->string('username', 20)->unique();
                $table->string('nama', 100);
                $table->string('password', 255);
                $table->timestamps();

                // Menambahkan foreign key
                $table->foreign('level_id')->references('level_id')->on('m_level');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
