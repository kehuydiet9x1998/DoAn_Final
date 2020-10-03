<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuHuynhsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('phu_huynh', function (Blueprint $table) {
      $table->id();
      $table->string('cmnd');
      $table->string('hodem');
      $table->string('ten');
      $table->string('email');
      $table->string('sodienthoai');
      $table->dateTime('ngaysinh');
      $table->string('gioitinh');
      $table->string('diachi');
      $table->unsignedBigInteger('user_phu_huynh_id')->nullable();
      $table
        ->foreign('user_phu_huynh_id')
        ->references('id')
        ->on('users');
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
    Schema::dropIfExists('phu_huynh');
  }
}
