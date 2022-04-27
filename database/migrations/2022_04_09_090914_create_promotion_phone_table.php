<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_phone', function (Blueprint $table) {
            $table->integer('promotion_phone_id', true);
            $table->integer('phone_id')->index('phone_id');
            $table->boolean('promotion_phone_status');
            $table->float('promotion_phone_percentage', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotion_phone');
    }
}
