<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('api_key_id');
            $table->string('label_ch');
            $table->string('field1');
            $table->string('field2');
            $table->integer('last_entry_count');
            $table->foreign('api_key_id')->references('id')->on('api_keys_list')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('channels');
    }
}
