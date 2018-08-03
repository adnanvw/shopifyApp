<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->text('site_name');
            $table->text('supplier_name');
            $table->float('supplier_feedback_score')->nullable();
            $table->text('product_url');
            $table->float('product_rating', 1, 1)->nullable();
            $table->integer('quantity_sold')->nullable();
            $table->integer('reviews_count');
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
        Schema::dropIfExists('suppliers');
    }
}
