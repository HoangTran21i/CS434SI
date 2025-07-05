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
        Schema::create('tbl_promotion', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Mã khuyến mãi
            $table->string('description')->nullable(); // Mô tả khuyến mãi
            $table->decimal('discount', 5, 2); // Phần trăm giảm giá (VD: 10.00)
            $table->date('start_date'); // Ngày bắt đầu
            $table->date('end_date'); // Ngày kết thúc
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
        Schema::dropIfExists('tbl_promotion');
    }
};