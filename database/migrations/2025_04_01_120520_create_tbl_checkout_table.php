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
        Schema::create('tbl_checkout', function (Blueprint $table) {
            $table->integer('checkoutId', true);
            $table->integer('bookingId')->index('fk_checkout_booking');
            $table->string('paymentMethod');
            $table->timestamp('paymentDate')->useCurrentOnUpdate()->useCurrent();
            $table->double('amount');
            $table->string('paymentStatus');
            $table->string('transactionId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_checkout');
    }
};
