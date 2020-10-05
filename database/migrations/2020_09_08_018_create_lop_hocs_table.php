<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('lop_hoc', function (Blueprint $table) {
      $table->id();
      $table->string('tenlop');
      $table->dateTime('ngaytao');
      $table
        ->integer('siso')
        ->unsigned()
        ->default(0);
      $table->string('trangthai');
      $table->string('ghichu');
      $table->unsignedBigInteger('khoa_hoc_id');
      $table
        ->foreign('khoa_hoc_id')
        ->references('id')
        ->on('khoa_hoc');
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
    Schema::dropIfExists('lop_hoc');
  }
}
