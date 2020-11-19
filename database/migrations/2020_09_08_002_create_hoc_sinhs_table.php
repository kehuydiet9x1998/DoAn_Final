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

      $table->string('hodem')->nullable();
      $table->string('ten')->nullable();
      $table->date('ngaysinh')->nullable();
      $table->string('gioitinh')->nullable();
      $table->string('trangthai')->nullable();
      $table->string('cmnd')->nullable();
      $table->string('hotenchame')->nullable();
      $table->string('email')->nullable();
      $table->string('sodienthoai')->nullable();
      $table->string('diachi')->nullable();
      $table
        ->foreignId('user_id')
        ->constrained()
        ->cascadeOnDelete();
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