<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdatecasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updatecases', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('problem_id')->nullable();
            $table->foreign('problem_id')->references('id')->on('problems')->onDelete('cascade');
            $table->string('service');
            $table->string('status')->default('incomplete');
            $table->dateTime('next_hearing');
            $table->longText('description');
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
        Schema::dropIfExists('updatecases');
    }
}
