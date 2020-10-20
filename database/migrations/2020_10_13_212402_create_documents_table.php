<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('prisioners_id')->nullable()->index();
            $table->integer('officers_id')->nullable()->index();
            $table->integer('user_id')->nullable()->index();
            $table->string('name');
            $table->string('address');
            $table->string('status')->default('PENDING')->index();
            $table->string('job');
            $table->string('relationship');
            $table->string('purpose');
            $table->date('expired');
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
        Schema::dropIfExists('documents');
    }
}
