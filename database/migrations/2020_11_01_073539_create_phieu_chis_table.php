<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuChisTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('phieu_chi', function (Blueprint $table) {
      $table->id();
      $table->text('lydo');
      $table->dateTime('ngaytao');
      $table
        ->foreignId('nhan_vien_id')
        ->constrained('nhan_vien')
        ->cascadeOnDelete();
      $table->bigInteger('sotien');
      $table->text('ghichu');
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
    Schema::dropIfExists('phieu_chi');
  }
}