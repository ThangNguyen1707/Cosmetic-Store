<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_brand', function (Blueprint $table) {
            $table->Increments('brand_id');
            $table->string('brand_name');
            $table->text('brand_description');
            $table->string('brand_image');
            $table->integer('brand_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migratiosns.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_brand');
    }
}
