<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdiTable extends Migration
{
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->id('id_prodi');
            $table->string('prodi', 50)->nullable(false);
            $table->timestamps();
            $table->foreignId('id_jurusan')
                ->references('id_jurusan')
                ->on('jurusan')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('prodi');
    }
}
