<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToTodoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('todo_tables', function (Blueprint $table) {
            $table->string('image')->nullable(); // Add a nullable string column for storing image filenames
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todo_tables', function (Blueprint $table) {
            $table->dropColumn('image'); // Drop the image column if migration is rolled back
        });
    }
}

