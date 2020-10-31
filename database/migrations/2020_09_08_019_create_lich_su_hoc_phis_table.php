<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichSuHocPhisTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('lich_su_hoc_phi', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('sotiendadong')->default(0);
      $table->date('ngaydong');
      $table->unsignedBigInteger('hoc_phi_id');
      $table
        ->foreign('hoc_phi_id')
        ->references('id')
        ->on('hoc_phi');
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
    Schema::dropIfExists('lich_su_hoc_phi');
  }
}