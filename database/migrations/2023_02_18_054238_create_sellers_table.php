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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('nid')->nullable();
            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('district')->nullable();
            $table->string('full_address')->nullable();
            $table->string('product_quantity')->nullable();
            $table->string('product_type')->nullable();
            $table->string('avg_product_price')->nullable();
            $table->string('expected_profit')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('bkash_account_no')->nullable();
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
        Schema::dropIfExists('sellers');
    }
};
