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
        Schema::create('factory_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('current_stock');
            $table->decimal('negotiated_cost');
            $table->integer('delivery_time');
            
            $table->integer('articles_id')->unsigned();
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factory_articles');
    }
};
