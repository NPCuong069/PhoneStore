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
            $table->foreign(['accesory_id'], 'accesory_cart_ibfk_2')->references(['accesory_id'])->on('accesory');
            $table->foreign(['cart_id'], 'accesory_cart_ibfk_3')->references(['id'])->on('cart');
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
            $table->dropForeign('accesory_cart_ibfk_2');
            $table->dropForeign('accesory_cart_ibfk_3');
        });
    }
}
