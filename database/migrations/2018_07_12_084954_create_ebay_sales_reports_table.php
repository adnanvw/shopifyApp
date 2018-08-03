<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbaySalesReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebay_sales_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->text('country');
            $table->dateTime('date_posted');
            $table->text('ships_from_country');
            $table->float('price', 5, 2);
            $table->text('currency');
            $table->text('product_url');
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
        Schema::dropIfExists('ebay_sales_reports');
    }
}
