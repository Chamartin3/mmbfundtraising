<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';            
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('tel');
            $table->string('email')->nullable();         
            $table->tinyInteger('status')->default(0)->nullable();
            $table->double('prev_amount')->default(0)->nullable();
            $table->double('amount')->nullable();
            $table->string('origen')->nullable();
            $table->string('tipo')->nullable();



            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');  

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
