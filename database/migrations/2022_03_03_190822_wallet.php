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
        Schema::create('Wallet', function (Blueprint $table) {
            $table->bigInteger('code')->autoIncrement()->unsigned();
            $table->bigInteger('seller_code')->unsigned();
            $table->bigInteger('client_code')->unsigned()->unique(); //cada vendendor pode ter um unico cliente
            $table->timestamps();

            $table->foreign('seller_code')->references('code')->on('sellers');
            $table->foreign('client_code')->references('code')->on('clients');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Wallet');
    }
};
