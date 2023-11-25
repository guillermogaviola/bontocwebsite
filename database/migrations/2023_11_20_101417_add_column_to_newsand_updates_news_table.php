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
        Schema::table('newsand_updates_news', function (Blueprint $table) {
            $table->id();
            $table->string('image')->after('description')->nullable();
            $table->string('title');
            $table->text('content');
            $table->string('image'); // Add this line for the image column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('newsand_updates_news', function (Blueprint $table) {
            //
        });
    }
};
