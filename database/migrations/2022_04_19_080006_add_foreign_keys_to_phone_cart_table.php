<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPhoneCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phone_cart', function (Blueprint $table) {
            $table->foreign(['phone_id'], 'phone_cart_ibfk_1')->references(['id'])->on('phone');
            $table->foreign(['cart_id'], 'phone_cart_ibfk_2')->references(['id'])->on('cart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phone_cart', function (Blueprint $table) {
            $table->dropForeign('phone_cart_ibfk_1');
            $table->dropForeign('phone_cart_ibfk_2');
        });
    }
}
