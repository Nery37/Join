<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->integer('id_categoria_produto')->unsigned();
            $table->datetime('data_cadastro');
            $table->string('nome_produto', 150);
            $table->float('valor_produto', 10, 2);
            $table->foreign('id_categoria_produto')->references('id_categoria_planejamento')->on('categoria_produto');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produtos');
    }
}
