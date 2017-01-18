<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Opers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opers', function(Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->decimal('sum', 8, 2);
            $table->string('card_no', 16);
            $table->integer('card_month');
            $table->integer('card_year');
            $table->string('cvv', 3);
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->string('zip_code', 5);
            $table->timestamps();
            $table->string('result');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
