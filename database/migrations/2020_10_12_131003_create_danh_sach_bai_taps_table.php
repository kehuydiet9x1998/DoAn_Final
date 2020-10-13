<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhSachBaiTapsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('danh_sach_bai_tap', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('buoi_hoc_id');
      $table
        ->foreign('buoi_hoc_id')
        ->references('id')
        ->on('buoi_hoc');
      $table->unsignedBigInteger('bai_tap_id');
      $table
        ->foreign('bai_tap_id')
        ->references('id')
        ->on('bai_tap');
      $table->unsignedBigInteger('hoc_sinh_id');
      $table
        ->foreign('hoc_sinh_id')
        ->references('id')
        ->on('hoc_sinh');
      $table->string('trangthai')->default('Chưa hoàn thành');
      $table->float('diem')->default(0);
      $table->string('nhanxet')->default('');
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
    Schema::dropIfExists('danh_sach_bai_tap');
  }
}