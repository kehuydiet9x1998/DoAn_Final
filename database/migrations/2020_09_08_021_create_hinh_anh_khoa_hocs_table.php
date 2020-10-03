<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhKhoaHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hinh_anh_khoa_hoc', function (Blueprint $table) {
      $table->id();
      $table->string('anh');
      $table->string('duongdan');
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
    Schema::dropIfExists('hinh_anh_khoa_hoc');
  }
}
