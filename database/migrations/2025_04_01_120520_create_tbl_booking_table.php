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
        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->integer('bookingId', true);
            $table->integer('tourId')->index('fk_booking_tour');
            $table->integer('userId');
            $table->string('fullName');
            $table->string('email', 50);
            $table->string('phoneNumber', 50);
            $table->string('address');
            $table->timestamp('bookingDate')->useCurrentOnUpdate()->useCurrent();
            $table->integer('numAdults');
            $table->integer('numChildren');
            $table->double('totalPrice');
            $table->enum('bookingStatus', ['y', 'b', 'f', 'c'])->default('b');
            $table->date('start_date')->nullable();;
            $table->date('end_date')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_booking');
    }
};