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
        Schema::create('Sellers', function (Blueprint $table) {
            $table->bigInteger('code')->unsigned()->autoIncrement();
            $table->string('full_name');
            $table->string('short_name')->nullable();
            $table->dateTime('date_of_hire');
            $table->timestamps();

            //$table->primary('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sellers');
    }
};
