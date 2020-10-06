<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbadah2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibadah2s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->string('nohp',13)->unique();
            $table->string('email')->unique();
            $table->string('kode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibadah2s');
    }
}
