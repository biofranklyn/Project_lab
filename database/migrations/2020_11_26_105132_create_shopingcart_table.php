<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopingcartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopingcart', function (Blueprint $table) {
            $table->id();
            $table->string('User_id');
            $table->string('flower_id');
            $table->string('Flowers_Name');
            $table->string('Subtotal');
            $table->string('Quantity');
            $table->string('Flowers_Image');
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
        Schema::dropIfExists('shopingcart');
    }
}
