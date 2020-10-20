<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanXetHocSinhsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('nhan_xet_hoc_sinh', function (Blueprint $table) {
      $table->id();
      $table->string('khanangtiepthu')->nullable();
      $table->string('khanangsangtao')->nullable();
      $table->string('apdungkienthuc')->nullable();
      $table->string('lambaitapvenha')->nullable();
      $table->string('ythuchoctap')->nullable();
      $table->string('tinhthanhoctap')->nullable();
      $table->string('kynanglamviecnhom')->nullable();
      $table->string('kynangthuyettrinh')->nullable();
      $table
        ->foreignId('hoc_sinh_id')
        ->constrained('hoc_sinh')
        ->cascadeOnDelete();
      $table
        ->foreignId('buoi_hoc_id')
        ->constrained('buoi_hoc')
        ->cascadeOnDelete();
      $table
        ->foreignId('lop_hoc_id')
        ->constrained('lop_hoc')
        ->cascadeOnDelete();
      $table
        ->foreignId('khoa_hoc_id')
        ->constrained('khoa_hoc')
        ->cascadeOnDelete();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('nhan_xet_hoc_sinh');
  }
}