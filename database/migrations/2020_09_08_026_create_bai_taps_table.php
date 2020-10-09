<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiTapsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('bai_tap', function (Blueprint $table) {
      $table->id();
      $table->string('tenbaitap');
      $table->text('noidung');
      $table->string('trangthai');
      $table->float('diem');
      $table->unsignedBigInteger('buoi_hoc_id');
      $table
        ->foreign('buoi_hoc_id')
        ->references('id')
        ->on('buoi_hoc');
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
    Schema::dropIfExists('bai_tap');
  }
}
