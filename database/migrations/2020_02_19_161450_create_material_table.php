<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project');
            $table->string('buying_date');
            $table->decimal('price',6,2);
            $table->timestamps();
        });
    }
    /**
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('material');
    }
}
