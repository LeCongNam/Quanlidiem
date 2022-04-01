<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable();
            $table->string('tenmh');
            $table->integer('sotc');
            $table->float('diem');
            $table->string('masv',9);
            $table->string('lop');
            $table->integer('lanthi');

            $table->foreign('masv')->references('masv')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
};
