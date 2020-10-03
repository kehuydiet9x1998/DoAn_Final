<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocPhisTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hoc_phi', function (Blueprint $table) {
      $table->id();
      $table->string('lydo');
      $table->dateTime('ngaynop');
      $table->string('trangthai');
      $table->bigInteger('sotiendong')->unsigned();
      $table->string('ghichu');
      $table->unsignedBigInteger('hoc_sinh_id');
      $table
        ->foreign('hoc_sinh_id')
        ->references('id')
        ->on('hoc_sinh');
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
    Schema::dropIfExists('hoc_phi');
  }
}
