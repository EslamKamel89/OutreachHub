<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('outreach_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')
                ->constrained();
            $table->string('channel', 100);
            $table->string('subject', 500)->nullable();
            $table->text('message')->nullable();
            $table->string('status', 50);
            $table->timestamp('sent_at')->nullable();
            $table->timestamp('responded_at')->nullable();
            $table->text('notes')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('contact_id');
            $table->index('channel');
            $table->index('status');
            $table->index('sent_at');
            $table->index('responded_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('outreach_attempts');
    }
};
