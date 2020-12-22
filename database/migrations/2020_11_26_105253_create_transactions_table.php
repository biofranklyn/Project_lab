<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('Flower_id');
            $table->string('Flowers_Image');
            $table->string('Flowers_Name');
            $table->string('Flowers_Price');
            $table->string('Subtotal');
            $table->string('Quantity');
            $table->date("Date");
            $table->string('transactionTotal');
            $table->string('User_id');
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
        Schema::dropIfExists('transactions');
    }
}
