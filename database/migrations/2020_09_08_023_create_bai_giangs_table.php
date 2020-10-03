<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiGiangsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('bai_giang', function (Blueprint $table) {
      $table->id();
      $table->string('tenbaigiang');
      $table->string('noidung', 10000);
      $table->float('thoigiandukien');
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
    Schema::dropIfExists('bai_giang');
  }
}
