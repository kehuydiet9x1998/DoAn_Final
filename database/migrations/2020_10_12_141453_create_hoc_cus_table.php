<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocCusTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hoc_cu', function (Blueprint $table) {
      $table->id();
      $table->string('hinhanhthietbi')->nullable();
      $table->string('tenthietbi');
      $table->unsignedInteger('soluong');
      $table->string('trangthai');
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
    Schema::dropIfExists('hoc_cu');
  }
}