<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanXetKhoaHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('nhan_xet_khoa_hoc', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('khoa_hoc_id');
      $table->dateTime('thoigian');
      $table->text('noidung');
      $table->timestamps();
      $table->softDeletes();
      $table
        ->foreign('user_id')
        ->references('id')
        ->on('users');
      $table
        ->foreign('khoa_hoc_id')
        ->references('id')
        ->on('khoa_hoc');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('nhan_xet_khoa_hoc');
  }
}