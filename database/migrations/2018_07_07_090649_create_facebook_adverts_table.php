<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');          

            $table->dateTime('post_date');
            $table->string('advert_url');
            $table->string('advert_type');

            $table->integer('likes');
            $table->integer('comments');
            $table->integer('shares');
            
            $table->string('fb_page_url');
            $table->string('product_url');

            $table->integer('engagement_score');

            $table->timestamps();
        });

        Schema::table('winning_products', function($table)
        {
            $table->boolean('is_winning')->default(0);
            $table->integer('user_id');
        });

        Schema::rename('winning_products', 'products');



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_adverts');
    }
}
