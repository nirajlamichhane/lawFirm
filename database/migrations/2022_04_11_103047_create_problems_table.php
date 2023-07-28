<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign("user_id")->references('id')->on("users")->onCascade("delete");
            $table->string('title');
            $table->string('service');
            // $table->foreign('service_id')->references('id')->on("services")->onDelete('cascade');
            $table->longText('description');
            $table->string('status')->default('incomplete');
            $table->dateTime('next_hearing');
            $table->boolean('customer_has_access');
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
        Schema::dropIfExists('problems');
    }
}
