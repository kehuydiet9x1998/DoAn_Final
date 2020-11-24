<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinhVucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linh_vuc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hoc_sinh_id');
            $table->unsignedBigInteger('loai_khoa_hoc_id');
            $table
            ->foreign('hoc_sinh_id')
            ->references('id')
            ->on('hoc_sinh');
            $table
            ->foreign('loai_khoa_hoc_id')
            ->references('id')
            ->on('loai_khoa_hoc');
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
        Schema::dropIfExists('linh_vuc');
    }
}
