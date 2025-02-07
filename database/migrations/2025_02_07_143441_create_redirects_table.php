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
        Schema::create('redirects', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('user_agent')->nullable();
            $table->string('url')->nullable();
            $table->string('code')->nullable();
            $table->string('method')->nullable();
            $table->string('referrer')->nullable();
            $table->string('language')->nullable();
            $table->string('is_secure')->nullable();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()   // Automatically references 'id' on the 'users' table.
                ->nullOnDelete(); // Sets user_id to null if the referenced user is deleted.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redirects');
    }
};
