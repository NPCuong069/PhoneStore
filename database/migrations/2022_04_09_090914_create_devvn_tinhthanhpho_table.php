<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevvnTinhthanhphoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devvn_tinhthanhpho', function (Blueprint $table) {
            $table->string('matp', 5)->index('matp');
            $table->string('name', 100);
            $table->string('type', 30);
            $table->string('slug', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devvn_tinhthanhpho');
    }
}
