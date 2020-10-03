<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhenThuongKyLuatsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('khen_thuong_ky_luat', function (Blueprint $table) {
      $table->id();
      $table->dateTime('ngaytao');
      $table->string('ten');
      $table->string('lydo');
      $table->bigInteger('sotien')->unsigned();
      $table->string('ghichu');
      $table->string('loai');
      $table->unsignedBigInteger('nhan_vien_id');
      $table
        ->foreign('nhan_vien_id')
        ->references('id')
        ->on('nhan_vien');

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
    Schema::dropIfExists('khen_thuong_ky_luat');
  }
}
