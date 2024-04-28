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
        Schema::create('internposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('address_id')->constrained()->cascadeOnDelete();
            $table->boolean('visible')->default(true);
            $table->boolean('active')->default(true);
            $table->string('duration')->nullable();
            $table->timestamps();

        });

        Schema::create('intern_post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('internpost_id')->constrained()->cascadeOnDelete();
            $table->foreignId('interntag_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('internposts');
        Schema::dropIfExists('intern_post_tag');
    }
};
