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
        Schema::create('blockers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deployment_unit_id')->constrained();
            $table->string('title');
            $table->text('description');
            $table->string('status')->default('open');
            $table->foreignId('reported_by_user_id')->constrained('users');
            $table->text('resolution')->nullable();
            $table->foreignId('resolved_by_user_id')->nullable()->constrained('users');
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blockers');
    }
};
