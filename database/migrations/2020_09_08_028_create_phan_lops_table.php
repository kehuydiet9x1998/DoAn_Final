<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhanLopsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('phan_lop', function (Blueprint $table) {
      $table->id();
      $table->dateTime('ngayvaolop');
      $table->unsignedBigInteger('hoc_sinh_id');
      $table->unsignedBigInteger('lop_hoc_id');
      $table
        ->foreign('hoc_sinh_id')
        ->references('id')
        ->on('hoc_sinh');
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
    Schema::dropIfExists('phan_lop');
  }
}
