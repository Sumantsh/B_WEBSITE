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
        Schema::create('neworders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("orderID");
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("address");
            $table->integer("prdID")->nullable();
            $table->integer("qty")->nullable();
            $table->integer("mg")->nullable();
            $table->integer('pulse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newOrders');
    }
};
