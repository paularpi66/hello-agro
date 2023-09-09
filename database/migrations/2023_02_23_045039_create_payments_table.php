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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('amount')->nullable();
            $table->string('order_id')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('bkash_no')->nullable();
            $table->string('bkash_txnid')->nullable();
            $table->string('nagad_no')->nullable();
            $table->string('nagad_txnid')->nullable();
            $table->string('rocket_no')->nullable();
            $table->string('rocket_txnid')->nullable();
            $table->string('status')->nullable();
            $table->string('order_status')->nullable();
            $table->string('payment_status')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
