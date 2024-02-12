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
        // Schema::create('todo_images', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        Schema::table('todo_images', function (Blueprint $table) {
            $table->string('image')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo_images');
        $table->dropColumn('image');

        Schema::table('todo_images', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
