<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuCapsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('phu_cap', function (Blueprint $table) {
      $table->id();
      $table->string('tenphucap');
      $table->unsignedBigInteger('sotien');
      $table->unsignedBigInteger('nhan_vien_id')->nullable();
      $table->unsignedBigInteger('giao_vien_id')->nullable();
      $table->string('doituong');
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
    Schema::dropIfExists('phu_cap');
  }
}