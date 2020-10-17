<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHocSinhsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('hoc_sinh', function (Blueprint $table) {
      $table->id();

      $table->string('hodem');
      $table->string('ten');
      $table->dateTime('ngaysinh');
      $table->string('gioitinh');
      $table->string('trangthai');
      $table->string('cmnd');
      $table->string('hotenchame');
      $table->string('email');
      $table->string('sodienthoai');
      $table->string('diachi');
      $table->foreignId('user_id')->constrained()->cascadeOnDelete();
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
    Schema::dropIfExists('hoc_sinh');
  }
}