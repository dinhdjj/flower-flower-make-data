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
        Schema::create('PostComments', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Content');
            $table->foreignId('PostID')->constrained('Posts', 'ID')->cascadeOnDelete();
            $table->foreignId('AnonymousID')->constrained('Anonymouses', 'ID')->cascadeOnDelete();
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
        Schema::dropIfExists('post_comments');
    }
};
