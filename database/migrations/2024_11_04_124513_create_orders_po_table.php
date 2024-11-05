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
        Schema::create('orders_po', function (Blueprint $table) {
            $table->id();
            $table->integer('po'); // Purchase order number
            $table->string('model_name'); // Model name
            $table->string('style'); // Style of the model
            $table->string('gender'); // Gender (e.g., Male/Female/Unisex)
            // Size run fields
            $table->integer('size_36')->nullable(); // Quantity for size 36
            $table->integer('size_37')->nullable(); // Quantity for size 37
            $table->integer('size_38')->nullable(); // Quantity for size 38
            $table->integer('size_39')->nullable(); // Quantity for size 39
            $table->integer('size_40')->nullable(); // Quantity for size 40
            $table->integer('size_41')->nullable(); // Quantity for size 41
            $table->integer('size_42')->nullable(); // Quantity for size 42
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_po');
    }
};
