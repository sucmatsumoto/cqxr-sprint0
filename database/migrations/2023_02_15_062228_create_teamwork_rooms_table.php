<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamwork_rooms', function (Blueprint $table) {
            $table->bigIncrements('teamwork_room_id')->comment('TeamworkルームID');
            $table->string('room_name')->comment('ルーム名');
            $table->integer('capacity')->comment('上限人数');
            $table->integer('duns_number')->comment('DUNSナンバー');
            $table->string('object_id')->comment('オブジェクトID')->nullable();
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
        Schema::dropIfExists('teamwork_rooms');
    }
};
