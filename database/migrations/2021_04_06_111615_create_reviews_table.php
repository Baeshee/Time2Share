<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->foreign('product_name')->references('name')->on('products');
            $table->string('lender_email')->nullable();
            $table->foreign('lender_email')->references('email')->on('users');
            $table->text('review_content');
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
        Schema::table('reviews', function (Blueprint $table){
            $table->dropForeign('reviews_product_name_foreign');
            $table->dropForeign('reviews_lender_email_foreign');
        });
        Schema::dropIfExists('reviews');
    }
}
