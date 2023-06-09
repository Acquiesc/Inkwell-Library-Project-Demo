<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentColumnsInFeePaymentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fee_payment_logs', function (Blueprint $table) {
            $table->string('card_number')->after('amount_paid')->nullable();
            $table->integer('cvv')->length(3)->after('card_number')->nullable();
            $table->string('expiration_date')->after('cvv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fee_payment_logs', function (Blueprint $table) {
            $table->dropColumn('card_number');
            $table->dropColumn('cvv');
            $table->dropColumn('expiration_date');
        });
    }
}
