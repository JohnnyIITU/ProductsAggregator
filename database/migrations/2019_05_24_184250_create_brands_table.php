<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('addresskz');
            $table->string('geoposition');
            $table->string('addressru');
            $table->string('the_name_of_objectkz');
            $table->string('mode_of_operationru');
            $table->string('the_name_of_objectru');
            $table->string('mode_of_operationkz');
            $table->string('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
