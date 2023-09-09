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
        Schema::create('vets', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('nid')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('district')->nullable();
            $table->string('full_address')->nullable();
            $table->string('bvc_reg_no')->nullable();
            $table->string('experience')->nullable();
            $table->string('specialist_area')->nullable();
            $table->string('expected_fee')->nullable();
            $table->string('nid_pic')->nullable();

            $table->string('profile_photo')->nullable();
            $table->string('user_id')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('vets');
    }
};
