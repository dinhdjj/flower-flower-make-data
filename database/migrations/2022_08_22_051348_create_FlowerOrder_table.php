<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FlowerOrder', function (Blueprint $table) {
            $table->unsignedInteger('UnitPrice');
            $table->unsignedInteger('Quantity')->default(1);

            $table->foreignId('OrderID')->constrained('Orders', 'ID')->cascadeOnDelete();
            $table->foreignId('FlowerID')->constrained('Flowers', 'ID')->cascadeOnDelete();

            $table->primary(['OrderID', 'FlowerID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d');
    }
};
