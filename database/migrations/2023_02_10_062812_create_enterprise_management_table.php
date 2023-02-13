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
        Schema::create('enterprise_management', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id');
            $table->integer('duns_number')->comment('DUNSナンバー')->nullable(false);
            $table->string('company_name')->comment('企業名')->nullable(false);
            $table->string('enterprise_department')->comment('契約先企業部署')->nullable(false);
            $table->string('enterprise_manager')->comment('契約企業担当者')->nullable(false);
            $table->string('main_contact')->comment('代表連絡先')->nullable(false);
            $table->string('invoice_destination')->comment('請求書送付先')->nullable(false);
            $table->string('usage_start_date')->comment('利用開始日')->nullable();
            $table->date('end_of_contract_date')->comment('契約終了日')->nullable(false);
            $table->date('temp_use_stop_date')->comment('一時利用停止日')->nullable(false);
            $table->integer('available_id_num')->comment('利用可能ID数')->nullable(false);
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
        Schema::dropIfExists('enterprise_management');
    }
};
