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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('url')->comment('URL of the media.');
            $table->string('type')->comment('Type of media (e.g., image, video).');
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->comment('ID of the post the media belongs to.');
            $table->timestamps(); // This will create created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};