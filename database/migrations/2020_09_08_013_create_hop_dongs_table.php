<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopDongsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hop_dong', function (Blueprint $table) {
      $table->id();
      $table->dateTime('ngaytao');
      $table->dateTime('ngayhethan');
      $table->string('noidung', 10000);
      $table->string('trangthai');
      $table->string('ghichu');
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
    Schema::dropIfExists('hop_dong');
  }
}
