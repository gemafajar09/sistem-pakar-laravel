<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosa_models', function (Blueprint $table) {
            $table->bigIncrements('id_diagnosa');
            $table->string('nama',191);
            $table->string('nim',191);
            $table->string('jurusan',191);
            $table->double('rule1',11)->nullable();
            $table->double('rule2',11)->nullable();
            $table->double('rule3',11)->nullable();
            $table->double('rule4',11)->nullable();
            $table->double('rule5',11)->nullable();
            $table->double('hasil',11)->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosa_models');
    }
}
