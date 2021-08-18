<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('library');
            $table->string('depertment');
            $table->string('language');
            $table->string('book_type');
            $table->string('book_title');
            $table->integer('isbn');
            $table->string('authors');
            $table->string('publisher');
            $table->string('publish_date');
            $table->string('virsion');
            $table->integer('no_of_page');
            $table->string('image');
            $table->string('category');
            $table->integer('quantity');
            $table->float('price');
            $table->string('condition');
            $table->string('location');
            $table->string('supplier');
            $table->string('date_recived');
            $table->string('e_book');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
