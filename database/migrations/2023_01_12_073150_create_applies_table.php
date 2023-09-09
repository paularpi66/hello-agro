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
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('nid')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('farm_category')->nullable();
            $table->string('farm_name')->nullable();
            $table->string('req_amount')->nullable();
            $table->string('return_invest')->nullable();
            $table->string('duration')->nullable();
            $table->string('net_profit')->nullable();
            $table->string('district')->nullable();
            $table->string('full_address')->nullable();
            $table->text('land_amount')->nullable();
            $table->text('fund_used')->nullable();
            $table->string('nid_pic')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('applies');
    }
};
