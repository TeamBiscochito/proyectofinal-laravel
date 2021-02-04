<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('card_id')->unsigned();
            $table->string('question', 20);
            $table->Integer('answer');
            $table->string('magnitude', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pregunta');
    }
}
