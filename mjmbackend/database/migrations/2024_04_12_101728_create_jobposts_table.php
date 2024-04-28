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

        Schema::create('jobposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('address_id')->constrained()->cascadeOnDelete();
            $table->boolean('visible')->default(true);
            $table->boolean('active')->default(true);
            $table->timestamps();

        });

        Schema::create('job_post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jobpost_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('jobposts');
        Schema::dropIfExists('job_post_tag');
    }
};
