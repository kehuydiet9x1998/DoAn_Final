<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiTapsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('bai_tap', function (Blueprint $table) {
      $table->id();
      $table->string('tenbaitap')->null;
      $table->text('loaicauhoi')->default('tracnghiem');
      $table->text('noidung');
      $table->text('hinhanhminhhoa')->nullable();
      $table->text('dapan1')->nullable();
      $table->text('dapan2')->nullable();
      $table->text('dapan3')->nullable();
      $table->text('dapan4')->nullable();
      $table->text('dapan');
      $table->unsignedBigInteger('bai_giang_id');
      $table
        ->foreign('bai_giang_id')
        ->references('id')
        ->on('bai_giang');
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
    Schema::dropIfExists('bai_tap');
  }
}