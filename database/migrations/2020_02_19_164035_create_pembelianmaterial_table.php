<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianmaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelianmaterial', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project');
            $table->string('toko_name');
            $table->string('goods_name');
            $table->string('buying_date');
            $table->decimal('price',9,3);
            $table->integer('material_id');
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
        Schema::dropIfExists('pembelianmaterial');
    }
}
