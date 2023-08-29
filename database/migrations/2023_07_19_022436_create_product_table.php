<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orcamento_id');
            $table->integer('amout_product');
            $table->longText('description_service');
            $table->longText('description_product');
            $table->decimal('single_value', 10, 2);
            $table->decimal('total_value', 10, 2);
            $table->timestamps();

            $table->foreign('orcamento_id')->references('id')->on('orcamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
