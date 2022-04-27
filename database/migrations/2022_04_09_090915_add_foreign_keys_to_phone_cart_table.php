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
            $table->foreign(['cart_id'], 'phone_cart_ibfk_2')->references(['cart_id'])->on('cart');
            $table->foreign(['phone_id'], 'phone_cart_ibfk_1')->references(['phone_id'])->on('phone');
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
            $table->dropForeign('phone_cart_ibfk_2');
            $table->dropForeign('phone_cart_ibfk_1');
        });
    }
}
