<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopHocsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('lop_hoc', function (Blueprint $table) {
      $table->id();
      $table->string('tenlop');
      $table
        ->integer('siso')
        ->unsigned()
        ->default(0);
      $table->string('trangthai');
      $table->dateTime('ngaybatdau')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->dateTime('ngayketthuc')->nullable();
      $table->unsignedInteger('sobuoi')->default(10);
      $table->unsignedInteger('sobuoidahoc')->default(0);
      $table->string('ghichu')->default('');
      $table->unsignedBigInteger('khoa_hoc_id');
      $table
        ->foreign('khoa_hoc_id')
        ->references('id')
        ->on('khoa_hoc');

      $table->unsignedBigInteger('giao_vien_id');
      $table
        ->foreign('giao_vien_id')
        ->references('id')
        ->on('giao_vien');

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
    Schema::dropIfExists('lop_hoc');
  }
}