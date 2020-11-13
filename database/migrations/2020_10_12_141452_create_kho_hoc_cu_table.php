<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoHocCuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho_hoc_cu', function (Blueprint $table) {
            $table->id();
            $table->string('tenhoccu');
            $table->string('hinhanhhoccu')->nullable();
            $table->bigInteger('soluong');
            $table->bigInteger('capphat');
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
        Schema::dropIfExists('kho_hoc_cu');
    }
}
