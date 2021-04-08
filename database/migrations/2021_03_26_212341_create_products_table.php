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
            $table->string('name')->index();
            $table->string('owner_email');
            $table->foreign('owner_email')->references('email')->on('users');
            $table->string('lender_email')->nullable();
            $table->foreign('lender_email')->references('email')->on('users');
            $table->string('description');
            $table->string('image')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa6kzyaY9pOL1-slMuw-gTS2ZPZjxqw9Xe167zwE_pv8g5B99M3zk-nI-G-z777G0aT5A&usqp=CAU');
            $table->string('status')->default('Available');
            $table->string('return_date')->nullable();
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
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign('products_owner_email_foreign');
            $table->dropForeign('products_lender_email_foreign');
        });
        Schema::dropIfExists('products');
    }
}
