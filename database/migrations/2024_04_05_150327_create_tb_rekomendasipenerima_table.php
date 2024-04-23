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
        Schema::create('tb_rekomendasipenerima', function (Blueprint $table) {
            $table->bigInteger('rekomendasi_id', true);
            $table->string('niKeluarga', 20)->index('nikeluarga');
            $table->bigInteger('ranking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_rekomendasipenerima');
    }
};