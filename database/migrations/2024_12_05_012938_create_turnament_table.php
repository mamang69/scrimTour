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
        Schema::create('turnament', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('hadiah');
            $table->integer('pemain');
            $table->date('tanggal');
            $table->integer('biaya');
            $table->string('lokasi');
            $table->foreignId('game_id')->constrained('game')->onDelete('cascade');
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
        Schema::dropIfExists('turnament');
    }
};
