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
        Schema::create('CategoryPost', function (Blueprint $table) {
            $table->foreignId('CategoryID')->constrained('Categories', 'ID')->cascadeOnDelete();
            $table->foreignId('PostID')->constrained('Posts', 'ID')->cascadeOnDelete();

            $table->primary(['CategoryID', 'PostID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_category_post');
    }
};
