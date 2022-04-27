<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevvnXaphuongthitranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devvn_xaphuongthitran', function (Blueprint $table) {
            $table->string('xaid', 5)->index('xaid');
            $table->string('name', 100);
            $table->string('type', 30);
            $table->string('maqh', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devvn_xaphuongthitran');
    }
}
