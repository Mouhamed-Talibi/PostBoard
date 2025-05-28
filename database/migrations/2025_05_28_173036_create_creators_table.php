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
        Schema::create('creators', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['creator', 'admin'])->default('creator');
            $table->enum('status', ['not_verified', 'verified', 'banned'])->default('not_verified');
            $table->string('image')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['name', 'email'], 'creators_name_email_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creators');
    }
};
