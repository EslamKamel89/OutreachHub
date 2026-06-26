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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('contact_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('type', 50);

            $table->string('title');

            $table->text('description')->nullable();

            $table->text('notes')->nullable();

            $table->timestamp('due_at')->nullable();

            $table->timestamp('completed_at')->nullable();

            $table->string('priority', 30);

            $table->string('status', 30);

            $table->timestamps();
            $table->softDeletes();

            $table->index('contact_id');

            $table->index('type');
            $table->index('status');
            $table->index('priority');

            $table->index('due_at');
            $table->index('completed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
