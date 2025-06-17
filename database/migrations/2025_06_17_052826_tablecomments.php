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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content')->comment('Content of the comment.');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->comment('ID of the user who made the comment.');
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->comment('ID of the post the comment belongs to.');
            $table->timestamps(); // This will create created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};