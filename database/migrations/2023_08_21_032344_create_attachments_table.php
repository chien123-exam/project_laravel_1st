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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->string('attachable_type')->nullable();
            $table->string('file_name')->collation('default');
            $table->unsignedBigInteger('attachable_id');
            $table->string('extension')->collation('default');
            $table->string('mime_type')->collation('default');
            $table->unsignedInteger('int')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
