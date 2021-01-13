<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    public function up()
    {
        Schema::create('tb_dosen', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->char('NIP', 18)->unique();
            $table->string('NAMA', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
