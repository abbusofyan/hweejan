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
        Schema::table('engineering_orders', function (Blueprint $table) {
            $table->dropColumn('quotation_id');
            $table->dropColumn('sales_order_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineering_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('quotation_id')->nullable();
            $table->unsignedBigInteger('sales_order_id')->nullable();
        });
    }
};