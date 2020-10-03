<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHocPhisTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('chi_tiet_hoc_phi', function (Blueprint $table) {
      $table->id();
      $table->string('tenkhoanthu');
      $table
        ->bigInteger('sotien')
        ->unsigned()
        ->default(0);
      $table->unsignedBigInteger('sotiendong')->default(0);
      $table->unsignedBigInteger('hoc_phi_id');
      $table
        ->foreign('hoc_phi_id')
        ->references('id')
        ->on('hoc_phi');
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
    Schema::dropIfExists('chi_tiet_hoc_phi');
  }
}
