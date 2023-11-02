<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_designs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('designed_by');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('design_categories')->onDelete('cascade');
            $table->string('design_name');
            $table->string('price');
            $table->integer('height')->unsigned();;
            $table->integer('width')->unsigned();;
            $table->string('color');
            $table->string('pattern');
            $table->string('description');
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
        Schema::dropIfExists('add_designs');
    }
}
