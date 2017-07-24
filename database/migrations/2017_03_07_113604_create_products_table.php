<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('category_id');
            $table->index('category_id')->foreign('category_id')->refrences('id')->on('categories')->nullable();
            $table->double('price');
            $table->integer('unit');
            $table->integer('unit_type_id');
            $table->index('unit_type_id')->foreign('unit_type_id')->refrences('id')->on('unit_types')->nullable();
            $table->string('products_')->nullable();
            $table->string('products_image')->nullable();



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
        Schema::drop('products');
    }
}
