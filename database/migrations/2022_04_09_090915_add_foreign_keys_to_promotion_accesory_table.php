<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPromotionAccesoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('promotion_accesory', function (Blueprint $table) {
            $table->foreign(['accesory_id'], 'promotion_accesory_ibfk_1')->references(['accesory_id'])->on('accesory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('promotion_accesory', function (Blueprint $table) {
            $table->dropForeign('promotion_accesory_ibfk_1');
        });
    }
}
