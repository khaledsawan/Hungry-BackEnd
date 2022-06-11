<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->String('user_id');
            $table->decimal('order_amount');
            $table->String('payment_status');
            $table->String('payment_method');
            $table->String('transaction_reference');
            $table->String('order_status');
            $table->time("confirmed");
            $table->time("accepted");
            $table->tinyInteger('scheduled');
            $table->time("processing");
            $table->time("handover");
            $table->time("failed");
            $table->time("scheduled_at");
            $table->bigInteger('delivery_address_id');
            $table->text('order_note');
            $table->timestamps();
            $table->decimal('delivery_charge');
            $table->text('delivery_address');
            $table->String('otp');
            $table->time("pending");
            $table->time("picked_up");
            $table->time("delivery");
            $table->time("canceled");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
