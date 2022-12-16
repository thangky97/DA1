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
        Schema::create('bds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('price');
            $table->string('images');
            $table->unsignedInteger('so_tang'); //số tầng
            $table->unsignedInteger('so_phong'); // số phòng
            $table->unsignedInteger('so_tollet'); //số tollet
            $table->string('tinh_trang_bds'); //tình trạng bất động sản: đã bán, chưa bán
            $table->string('huong_nha'); //hướng nhà
            $table->string('spread'); //diện tích
            $table->string('title');
            $table->string('content');
            $table->unsignedInteger('type_bds_id'); //loại bds
            $table->string('status');
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
        Schema::dropIfExists('bds');
    }
};
