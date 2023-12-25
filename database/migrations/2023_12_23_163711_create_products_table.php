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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->integer('kategori_id');
            $table->integer('status_id');
            $table->timestamps();

            $table->foreign('kategori_id')->on('categories')->references('id_kategori');
            $table->foreign('status_id')->on('statuses')->references('id_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
