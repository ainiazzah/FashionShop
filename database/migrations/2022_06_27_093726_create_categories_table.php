<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //metode yang akan dijalankan ketika migration dijalankan.
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); //Membuat kolom id sebagai auto-incrementing primary key.
            $table->unsignedBigInteger('shop_id'); //Menambahkan kolom shop_id sebagai foreign key yang merujuk ke kolom id pada tabel shops.
            $table->string('name'); //Menambahkan kolom name sebagai kolom string untuk menyimpan nama kategori.
            $table->string('path'); //Menambahkan kolom path sebagai kolom string untuk menyimpan path (jalur) kategori.
            // Menambahkan foreign key constraint pada kolom shop_id yang merujuk ke tabel shops. 
            $table->foreign('shop_id')->references('id')->on('shops')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps(); //Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories'); //Menghapus tabel dengan nama 'categories'
    }
};
