<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('article_prices', function (Blueprint $table) {
            $table->integer('product_id');
            $table->string('region');
            $table->string('currency');
            $table->decimal('price');

            $table->primary(['product_id', 'region', 'currency']);

            $table->foreign('product_id')
              ->references('id')->on('articles')
              ->onDelete('cascade');
        });

        Schema::create('article_stocks', function (Blueprint $table) {
            $table->integer('product_id');
            $table->string('region');
            $table->integer('stock');

            $table->primary(['product_id', 'region']);

            $table->foreign('product_id')
              ->references('id')->on('articles')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_stocks');
        Schema::dropIfExists('article_prices');
        Schema::dropIfExists('articles');
    }
}
