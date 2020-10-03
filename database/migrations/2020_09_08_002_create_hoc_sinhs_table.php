<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocSinhsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hoc_sinh', function (Blueprint $table) {
      $table->id();

      $table->string('hodem');
      $table->string('ten');
      $table->string('email');
      $table->string('sodienthoai');
      $table->dateTime('ngaysinh');
      $table->string('gioitinh');
      $table->string('diachi');
      $table->string('trangthai');
      $table->unsignedBigInteger('phu_huynh_id')->nullable();
      $table
        ->foreign('phu_huynh_id')
        ->references('id')
        ->on('phu_huynh');

      $table->unsignedBigInteger('user_hoc_sinh_id')->nullable();
      $table
        ->foreign('user_hoc_sinh_id')
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
    Schema::dropIfExists('hoc_sinh');
  }
}
