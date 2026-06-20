<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date_time_creation');
            $table->decimal('subtotal',10,2);
            $table->decimal('iva');
            $table->decimal('grand_total');
            $table->string('additional_note');
            $table->string('order_status');

         
            $table->integer('shipping_addresses_id')->unsigned();
            $table->foreign('shipping_addresses_id')->references('id')->on('shipping_addresses')->onDelete('cascade')->onUpdate('cascade');
        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
