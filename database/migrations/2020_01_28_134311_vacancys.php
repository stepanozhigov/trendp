<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vacancys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('linck_hh',255)->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'deactived'])->default('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancys');
    }
}
