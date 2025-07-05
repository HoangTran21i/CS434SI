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
        Schema::create('tbl_tours', function (Blueprint $table) {
            $table->integer('tourId', true);
            $table->string('title');
            $table->string('time');
            $table->text('description');
            $table->integer('quantity');
            $table->double('priceAdult');
            $table->double('priceChild');
            $table->string('destination');
            $table->enum('domain', ['b', 't', 'n'])->comment('\'b\' : MienBac
\'t\' : MienTrung
\'n\' : MienNam');
            $table->boolean('availability');
            $table->date('startDate');
            $table->date('endDate');
            $table->text('weatherDestination')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_tours');
    }
};