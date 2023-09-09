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
        Schema::create('farmer_problems', function (Blueprint $table) {
            $table->id();
            $table->string('problem_name')->nullable();
            $table->string('problem_title')->nullable();
            $table->text('problem_detail')->nullable();
            $table->string('problem_image1')->nullable();
            $table->string('problem_image2')->nullable();
            $table->string('phone')->nullable();
            $table->string('addresss')->nullable();
            $table->string('vet_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('status')->default(0);
            $table->string('solved_by')->nullable();
            $table->string('solved_by_user_id')->nullable();
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
        Schema::dropIfExists('farmer_problems');
    }
};
