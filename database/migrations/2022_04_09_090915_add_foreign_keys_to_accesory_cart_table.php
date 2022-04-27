<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAccesoryCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accesory_cart', function (Blueprint $table) {
            $table->foreign(['cart_id'], 'accesory_cart_ibfk_3')->references(['cart_id'])->on('cart');
            $table->foreign(['accesory_id'], 'accesory_cart_ibfk_2')->references(['accesory_id'])->on('accesory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accesory_cart', function (Blueprint $table) {
            $table->dropForeign('accesory_cart_ibfk_3');
            $table->dropForeign('accesory_cart_ibfk_2');
        });
    }
}
