<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckInsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('check_in', function (Blueprint $table) {
      $table->id();
      $table->time('giocheckin')->nullable();
      $table->time('giocheckout')->nullable();
      $table->integer('ketqua')->nullable();
      $table->text('ghichu');
      $table->unsignedBigInteger('buoi_hoc_id');
      $table
        ->foreign('buoi_hoc_id')
        ->references('id')
        ->on('buoi_hoc');
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
    Schema::dropIfExists('check_in');
  }
}