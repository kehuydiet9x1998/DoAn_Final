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
      $table->bigInteger('thuclinh');
      $table->string('trangthai');
      $table->string('ghichu')->default('');
      $table->unsignedBigInteger('nhan_vien_id')->nullable();
      $table->unsignedBigInteger('giao_vien_id')->nullable();
      $table->string('doituong');
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
  }
}