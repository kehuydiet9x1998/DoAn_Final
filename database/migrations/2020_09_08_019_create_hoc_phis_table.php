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
      $table
        ->bigInteger('canthu')
        ->unsigned()
        ->default(0);
      $table
        ->bigInteger('dadong')
        ->unsigned()
        ->default(0);
      $table
        ->bigInteger('conno')
        ->unsigned()
        ->default(0);
      $table->string('trangthai')->default('Đã hoàn thành');
      $table->unsignedBigInteger('hoc_sinh_id');
      $table
        ->foreign('hoc_sinh_id')
        ->references('id')
        ->on('hoc_sinh');
      $table->datetime('deadline')->default(\Carbon\Carbon::now()->addDays(30));
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
