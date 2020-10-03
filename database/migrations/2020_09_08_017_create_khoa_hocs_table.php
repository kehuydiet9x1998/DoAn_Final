<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoaHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('khoa_hoc', function (Blueprint $table) {
      $table->id();
      $table->string('tenkhoahoc');
      $table->string('dotuoi');
      $table->unsignedInteger('sisotoida');
      $table->string('capdo');
      $table->string('noidung', 10000);
      $table->string('dieukienhoc');
      $table->bigInteger('hocphi');
      $table->unsignedBigInteger('loai_khoa_hoc_id');
      $table
        ->foreign('loai_khoa_hoc_id')
        ->references('id')
        ->on('loai_khoa_hoc');
      $table->unsignedBigInteger('level_id');
      $table
        ->foreign('level_id')
        ->references('id')
        ->on('level');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('khoa_hoc');
  }
}
