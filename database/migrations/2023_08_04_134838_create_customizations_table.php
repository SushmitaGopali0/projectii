<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customizations', function (Blueprint $table) {
            $table->id();
            $table->integer('design_id')->unsigned();
            $table->integer('designed_by')->unsigned();
            $table->integer('request_by')->unsigned();
            $table->integer('height')->unsigned();
            $table->integer('width')->unsigned();
            $table->string('color');
            $table->string('budget');
            $table->string('pattern');
            $table->string('description');
            $table->enum('status', ['none', 'pending', 'approved', 'decline']);
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
        Schema::dropIfExists('customizations');
    }
}
