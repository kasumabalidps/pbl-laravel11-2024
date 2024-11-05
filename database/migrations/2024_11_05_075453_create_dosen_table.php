<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id('nip');
            $table->string('nama', 150);
            $table->string('email', 150);
            $table->string('password', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dosen');
    }
}
