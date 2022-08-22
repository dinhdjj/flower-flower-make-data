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
        Schema::create('Orders', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Note');
            $table->foreignId('AnonymousID')->constrained('Anonymouses', 'ID')->cascadeOnDelete();
            $table->unsignedInteger('ShippingCost')->default(0);
            $table->timestamp('PaidAt')->nullable();
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
};