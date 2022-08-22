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
        Schema::create('Flowers', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Name');
            $table->text('Body');
            $table->unsignedInteger('UnitPrice');
            $table->unsignedInteger('Quantity')->default(1);
            $table->string('MainImageURL');
            $table->foreignId('UserID')->constrained('Users', 'ID')->cascadeOnDelete();
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
        Schema::dropIfExists('flowers');
    }
};
