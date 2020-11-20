<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiGiaoViensTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('loai_giao_vien', function (Blueprint $table) {
      $table->id();
      $table->string('tenloaigiaovien');
      $table->string('mota');
      $table->unsignedBigInteger('sotienmotgio');
      // $table->unsignedBigInteger('')
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('loai_giao_vien');
  }
}