<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThoiGianHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('thoi_gian_hoc', function (Blueprint $table) {
      $table->id();
      $table->string('thu');
      $table->unsignedBigInteger('ca_hoc_id');
      $table
        ->foreign('ca_hoc_id')
        ->references('id')
        ->on('ca_hoc');
      $table->unsignedBigInteger('lop_hoc_id');
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
    Schema::dropIfExists('thoi_gian_hoc');
  }
}
