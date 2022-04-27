<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPromotionPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promotion_phone', function (Blueprint $table) {
            $table->foreign(['phone_id'], 'promotion_phone_ibfk_1')->references(['phone_id'])->on('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promotion_phone', function (Blueprint $table) {
            $table->dropForeign('promotion_phone_ibfk_1');
        });
    }
}
