<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AdsSites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('SiteID');
            $table->string('Link');
            $table->string('AdsSite');
            $table->string('WhenAdd');
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
        Schema::dropIfExists('AdsSites');
    }
}
