<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverymanagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverymanagement', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('license_number');
            $table->string('nic_number');
            $table->string('occupation');
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
        Schema::dropIfExists('deliverymanagement');
    }
}
