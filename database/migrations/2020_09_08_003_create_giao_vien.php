<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoVien extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('giao_vien', function (Blueprint $table) {
      $table->id();
      $table->string('cmnd');
      $table->string('hodem');
      $table->string('ten');
      $table->dateTime('ngaysinh');
      $table->string('gioitinh');
      $table->string('sodienthoai');
      $table->string('email');
      $table->string('diachi');
      $table->string('tinhtrang');
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
    Schema::dropIfExists('giao_vien');
  }
}
