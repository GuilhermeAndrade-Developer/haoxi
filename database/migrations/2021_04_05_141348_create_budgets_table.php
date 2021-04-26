<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('cpf_cnpj');
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('budgets_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('budgets_id');
            $table->foreign('budgets_id')->references('id')->on('budgets');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->integer('total');
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
        Schema::dropIfExists('budgets');
        Schema::dropIfExists('budgets_product');
    }
}
