<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
             $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('payment_methods');
            $table->string('product_category');
            $table->string('product_name');
            $table->string('Quantity');
            $table->string('pack_preference');
            $table->string('preferred_day');
            $table->string('preferred_time');
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
        Schema::dropIfExists('requirements');
    }
}
