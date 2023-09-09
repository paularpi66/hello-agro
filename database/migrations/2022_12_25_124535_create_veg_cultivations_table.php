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
        Schema::create('veg_cultivations', function (Blueprint $table) {
            $table->id();
            $table->string('plant_name')->nullable();
            $table->string('btn_title')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('veg_cultivations');
    }
};
