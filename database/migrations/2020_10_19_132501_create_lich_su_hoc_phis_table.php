<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichSuHocPhisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_hoc_phi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sotiencandong');
            $table->bigInteger('sotiendadong');
            $table->bigInteger('sotienconthieu');
            $table->date('ngaydong');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('hoc_phi_id');
            $table
              ->foreign('hoc_phi_id')
              ->references('id')
              ->on('hoc_phi');
          $table->unsignedBigInteger('nhan_vien_id');
          $table
            ->foreign('nhan_vien_id')
            ->references('id')
            ->on('nhan_vien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_su_hoc_phi');
    }
}