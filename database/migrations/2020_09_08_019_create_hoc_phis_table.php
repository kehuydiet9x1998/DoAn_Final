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
      $table->bigInteger('canthu')->unsigned();
      $table->bigInteger('dadong')->unsigned();
      $table->bigInteger('conno')->unsigned();
      $table->string('trangthai');
      $table->unsignedBigInteger('hoc_sinh_id');
      $table
        ->foreign('hoc_sinh_id')
        ->references('id')
        ->on('hoc_sinh');

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
