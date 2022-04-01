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
        Schema::create('students', function (Blueprint $table) {
            $table->string('masv',9)->primary();
            $table->string('tensv');
            $table->string('hinhsv');
            $table->string('ngaysinh');
            $table->string('noisinh');
            $table->string('malop',7);
            $table->string('tenkhoa');
            $table->timestamps();

            $table->foreign('malop')->references('malop')->on('class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
