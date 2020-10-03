<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuoiHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('buoi_hoc', function (Blueprint $table) {
      $table->id();
      $table->dateTime('ngayhoc');
      $table->string('ghichu');
      $table->string('noidungbuoihoc', 10000);
      $table->dateTime('giocheckin');
      $table->dateTime('giocheckout');
      $table->string('trangthai');
      $table->unsignedBigInteger('lop_hoc_id');
      $table
        ->foreign('lop_hoc_id')
        ->references('id')
        ->on('lop_hoc');
      $table->unsignedBigInteger('phong_hoc_id');
      $table
        ->foreign('phong_hoc_id')
        ->references('id')
        ->on('phong_hoc');

      $table->unsignedBigInteger('giao_vien_id');
      $table
        ->foreign('giao_vien_id')
        ->references('id')
        ->on('nhan_vien');
      $table->unsignedBigInteger('bai_giang_id');
      $table
        ->foreign('bai_giang_id')
        ->references('id')
        ->on('bai_giang');
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
    Schema::dropIfExists('buoi_hoc');
  }
}
