<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuongsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('luong', function (Blueprint $table) {
      $table->id();
      $table->date('thang');
      $table->unsignedBigInteger('cong');
      $table->unsignedBigInteger('tongphucap')->nullable();
      $table->unsignedBigInteger('tongluong')->nullable();
      $table->unsignedBigInteger('bhxh')->nullable();
      $table->unsignedBigInteger('bhyt')->nullable();
      $table->unsignedBigInteger('tongkhautru')->nullable();
      $table->bigInteger('thuclinh');
      $table->string('trangthai');
      $table->unsignedBigInteger('nhan_vien_id')->nullable();
      $table->unsignedBigInteger('giao_vien_id')->nullable();
      $table->string('doituong');
      $table->timestamps();
      $table->softDeletes();
    });

    Schema::create('cau_hinh_luong', function (Blueprint $table) {
      $table->id();
      $table->string('ten');
      $table->string('mota');
      $table->float('giatri');
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
    Schema::dropIfExists('luong');
    Schema::dropIfExists('cau_hinh_luong');
  }
}