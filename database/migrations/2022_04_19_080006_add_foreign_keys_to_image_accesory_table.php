<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToImageAccesoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('image_accesory', function (Blueprint $table) {
            $table->foreign(['accesory_id'], 'image_accesory_ibfk_1')->references(['accesory_id'])->on('accesory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('image_accesory', function (Blueprint $table) {
            $table->dropForeign('image_accesory_ibfk_1');
        });
    }
}
