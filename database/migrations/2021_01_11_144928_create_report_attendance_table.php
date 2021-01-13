<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('tb_report_attendance', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigInteger('PRODI');
            $table->string('SEMESTER', 20);
            $table->integer('PERTEMUAN', 2);
            $table->date('TGL');
            $table->time('JAM');
            $table->bigInteger('MATKUL');
            $table->bigInteger('DOSEN');
            $table->string('PEMBAHASAN');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('report_attendance');
    }
}
