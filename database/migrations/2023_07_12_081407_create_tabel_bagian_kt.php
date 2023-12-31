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
        Schema::create('t_bagian_kt', function (Blueprint $table) {
            $table->string('bagianid',10)->primary();
            $table->string('namabagian',45)->nullable();
            $table->string('kepalabagian',45)->nullable();
            $table->string('telp',45)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bagian_kt');
    }
};
