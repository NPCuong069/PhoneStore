<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionAccesoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_accesory', function (Blueprint $table) {
            $table->integer('promotion_accesory_id', true);
            $table->integer('accesory_id')->index('accesory_id');
            $table->boolean('promotion_accesory_status');
            $table->float('promotion_accesory_percentage', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotion_accesory');
    }
}
