<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('nhan_vien', function (Blueprint $table) {
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
      $table->unsignedBigInteger('chuc_vu_id');
      $table
        ->foreign('chuc_vu_id')
        ->references('id')
        ->on('chuc_vu');
      $table->unsignedBigInteger('user_nhan_vien_id')->nullable();
      $table
        ->foreign('user_nhan_vien_id')
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
    Schema::dropIfExists('nhan_vien');
  }
}
