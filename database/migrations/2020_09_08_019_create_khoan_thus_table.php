<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoanThusTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('khoan_thu', function (Blueprint $table) {
      $table->id();
      $table->string('tenkhoanthu');
      $table->bigInteger('sotien');
      $table->date('ngaybatdau');
      $table->date('ngayketthuc');
      $table->foreignId('hoc_phi_id')->nullable();
      $table->foreignId('lop_hoc_id')->nullable();
      $table->string('trangthai');
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
    Schema::dropIfExists('khoan_thu');
  }
}