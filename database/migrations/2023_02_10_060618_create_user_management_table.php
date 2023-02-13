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
        Schema::create('user_management', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id');
            $table->string('last_name')->comment('姓（漢字、ひらがな、カナ、アルファベット）')->nullable(false);
            $table->string('first_name')->comment('名（漢字、ひらがな、カナ、アルファベット）')->nullable(false);
            $table->string('last_name_kana')->comment('姓（カナ）')->nullable(false);
            $table->string('first_name_kana')->comment('名（カナ）')->nullable(false);
            $table->string('mail_address_dacc')->comment('メールアドレス（ビジdアカ）')->nullable()->change();
            $table->string('mail_address_apple')->comment('メールアドレス（Apple ID） ')->nullable();
            $table->integer('tel_number')->comment('電話番号 ')->nullable();
            $table->string('belong_organization')->comment('所属組織 ')->nullable();
            $table->string('position')->comment('役職')->nullable();
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
        Schema::dropIfExists('user_management');
    }
};
