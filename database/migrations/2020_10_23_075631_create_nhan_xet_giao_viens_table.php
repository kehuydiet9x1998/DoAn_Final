<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanXetGiaoViensTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('nhan_xet_giao_vien', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('giao_vien_id');
      $table->dateTime('thoigian');
      $table->text('noidung');
      $table->timestamps();
      $table->softDeletes();
      $table
        ->foreign('user_id')
        ->references('id')
        ->on('users');
      $table
        ->foreign('giao_vien_id')
        ->references('id')
        ->on('giao_vien');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('nhan_xet_giao_vien');
  }
}