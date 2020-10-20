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
        Schema::create('lich_su_hoc_phis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sotiencandong');
            $table->bigInteger('sotiendadong');
            $table->bigInteger('sotienconthieu');
            $table->date('ngaydong');
            $table->string('nguoithu');
            $table->timestamps();
            $table->unsignedBigInteger('hoc_phi_id');
            $table
              ->foreign('hoc_phi_id')
              ->references('id')
              ->on('hoc_phi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_su_hoc_phis');
    }
}
