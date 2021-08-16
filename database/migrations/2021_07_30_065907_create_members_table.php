<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nrp')->nullable();
            $table->string('name');
            $table->unsignedBigInteger('rankId');
            $table->foreign('rankId')->references('id')->on('ranks')->nullable();
            $table->unsignedBigInteger('positionId');
            $table->foreign('positionId')->references('id')->on('positions')->nullable();
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
        Schema::dropIfExists('members');
    }
}
