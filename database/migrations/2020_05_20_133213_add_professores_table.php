<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('professores', function (Blueprint $table) {
          $table->id();//autoincrement
          $table->string('nome',255);//string(name, width)
          $table->timestamps();
          $table->softDeletes();//dropping timestamp
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('professores');

    }
}
