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
        Schema::create('outsole_in', function (Blueprint $table) {
            $table->id();
            $table->date('release');
            $table->string('work_order');
            $table->date('start_outsole');
            $table->date('finish_outsole');
            $table->string('po_spk');
            $table->string('model_name');
            $table->string('style');
            $table->integer('input');
            // Size run fields
            $table->integer('size_36')->nullable(); // Quantity for size 36
            $table->integer('size_37')->nullable(); // Quantity for size 37
            $table->integer('size_38')->nullable(); // Quantity for size 38
            $table->integer('size_39')->nullable(); // Quantity for size 39
            $table->integer('size_40')->nullable(); // Quantity for size 40
            $table->integer('size_41')->nullable(); // Quantity for size 41
            $table->integer('size_42')->nullable(); // Quantity for size 42
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
        Schema::dropIfExists('outsole_in');
    }
};
