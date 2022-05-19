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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titre');
            $table->string('slug');
            $table->string('description');
            $table->string('resume-cours');
            $table->string('liens');
            $table->string('video');


            $table->integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations');

            $table->integer('module_id')->unsigned();
            $table->foreign('module_id')->references('id')->on('modules');
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
};
