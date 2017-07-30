<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned();
            $table->integer('receiver_id')->unsigned();
            $table->string('subject');
            $table->string('message', 360);
            $table->tinyInteger('status_member')->comment('0: unread, 1: read, 2: delete ');
            $table->tinyInteger('status_art')->comment('0: inactive, 1: active ');
            $table->timestamps();

            $table->foreign('sender_id')
                  ->references('id')->on('users');
            $table->foreign('receiver_id')
                  ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
