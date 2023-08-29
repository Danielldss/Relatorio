<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio', function (Blueprint $table) {
            $table->id();
            $table->string('request');
            $table->enum('type',['remote', 'in_person']);
            $table->integer('value');
            $table->longText('service');
            $table->enum('place',['design', 'mix','shed']);
            $table->enum('situation',['paid','pendent'])->default('pendent');
            $table->date('data_service')->nullable();
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
        Schema::dropIfExists('relatorio');
    }
}
