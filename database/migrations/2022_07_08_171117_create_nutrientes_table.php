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
        Schema::create('nutrientes', function (Blueprint $table) {
            $table->id();
            $table->string('caboidtatos');
            $table->string('proteinas');
            $table->string('agua');
            $table->string('vitaminas');
            $table->string('fibras');
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
        Schema::dropIfExists('nutrientes');
    }
};
