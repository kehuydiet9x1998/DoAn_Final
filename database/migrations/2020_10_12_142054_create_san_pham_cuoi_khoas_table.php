<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamCuoiKhoasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('san_pham_cuoi_khoa', function (Blueprint $table) {
      $table->id();
      $table->text('mota');
      $table->text('noidung');
      $table->text('fileslide')->nullable();
      $table->unsignedBigInteger('hoc_sinh_id');
      $table
        ->foreign('hoc_sinh_id')
        ->references('id')
        ->on('hoc_sinh');
      $table->unsignedBigInteger('lop_hoc_id');
      $table
        ->foreign('lop_hoc_id')
        ->references('id')
        ->on('lop_hoc');
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
    Schema::dropIfExists('san_pham_cuoi_khoa');
  }
}