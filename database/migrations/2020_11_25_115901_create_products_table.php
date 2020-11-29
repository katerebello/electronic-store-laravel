<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // fk
            $table->unsignedBigInteger('adminprofile_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->bigInteger('product_price');
            $table->bigInteger('model_no');
            $table->string('category');
            $table->timestamps();

            // fk
            $table->index('adminprofile_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
