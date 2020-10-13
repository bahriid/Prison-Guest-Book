<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisioners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birth_address');
            $table->string('birth_days');
            $table->integer('age');
            $table->string('gender');
            $table->string('nasionality');
            $table->string('address');
            $table->string('religion');
            $table->string('job');
            $table->string('prisioner_number');
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
        Schema::dropIfExists('prisioners');
    }
}
