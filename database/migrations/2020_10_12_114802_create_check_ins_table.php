<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckInsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('check_in', function (Blueprint $table) {
      $table->id();
      $table->dateTime('giocheckin')->nullable();
      $table->dateTime('giocheckout')->nullable();
      $table->string('ketqua')->nullable();
      $table->text('ghichu')->nullable();
      $table->unsignedBigInteger('nhan_vien_id')->nullable();
      $table
        ->foreign('nhan_vien_id')
        ->references('id')
        ->on('nhan_vien');
      $table->unsignedBigInteger('giao_vien_id')->nullable();
      // $table
      //   ->foreign('giao_vien_id')
      //   ->references('id')
      //   ->on('giao_vien');
      $table->date('ngaycham')->nullable();
      $table->string('trangthai')->default('Chưa xác nhận');
      $table->unsignedBigInteger('buoi_hoc_id')->nullable();
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
    Schema::dropIfExists('check_in');
  }
}