<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount_litres', 10, 3)->unsigned()->nullable();
            $table->integer('cow_id')->unsigned()->nullable();
            $table->foreign('cow_id')->references('id')->on('cows'); //there is no need to call the onDelete option
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('milks');
    }
}
