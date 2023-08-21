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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->unique();
            $table->string('slug', 255)->unique();
            $table->integer('parent');
            $table->integer('created_by');
            $table->text('content');
            // $table->string('meta_title', 255);
            $table->string('meta_desc', 255);
            $table->string('meta_keyword', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
