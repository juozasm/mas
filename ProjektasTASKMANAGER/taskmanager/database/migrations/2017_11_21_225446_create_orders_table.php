<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('order_number')->nullable();
            $table->string('client_id')->nullable();
            $table->string('status_id')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('planned_end_date')->nullable();
            $table->float('order_sum')->nullable();
            $table->float('order_sum_paid')->nullable();
            $table->text('notes')->nullable();
            $table->string('file_id')->nullable();
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
