<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHocPhisTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('chi_tiet_hoc_phi', function (Blueprint $table) {
      $table->id();
      $table
        ->foreignId('khoan_thu_id')
        ->constrained('khoan_thu')
        ->cascadeOnDelete();
      $table
        ->foreignId('lich_su_hoc_phi_id')
        ->constrained('lich_su_hoc_phi')
        ->cascadeOnDelete();
      $table->integer('dadong')->default(0);
      $table->string('trangthai')->nullable();
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
    Schema::dropIfExists('chi_tiet_hoc_phi');
  }
}