<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->string('request');
            $table->enum('type',['remote', 'in_person']);
            $table->enum('place',['design', 'mix','shed']);
            $table->integer('value_labor');
            $table->enum('situation',['approved','rejected', 'pendent'])->default('pendent');
            $table->date('data_budget')->nullable();
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
        Schema::dropIfExists('orcamentos');
    }
}
