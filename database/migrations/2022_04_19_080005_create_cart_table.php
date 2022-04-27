<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('cart_name');
            $table->string('phone', 11);
            $table->date('cart_date');
            $table->integer('cart_status');
            $table->string('matp', 5)->index('matp');
            $table->string('maqh', 5)->index('maqh');
            $table->string('xaid', 5)->index('xaid');
            $table->string('cart_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
