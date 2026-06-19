<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')
                ->constrained();
            $table->foreignId('industry_id')
                ->nullable()
                ->constrained();
            $table->string('opportunity_stage', 50)
                ->default('not_contacted');
            $table->string('name');

            $table->string('website', 500)->nullable();
            $table->string('linkedin_url', 500)->nullable();
            $table->string('careers_url', 500)->nullable();
            $table->unsignedInteger('employee_count')->nullable();
            $table->text('description')->nullable();
            $table->string('source', 100)->nullable();
            $table->text('notes')->nullable();
            $table->boolean('is_hiring')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->index('city_id');
            $table->index('industry_id');
            $table->index('name');
            $table->index('website');
            $table->index('is_hiring');
            $table->index('opportunity_stage');
            $table->index(['city_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('companies');
    }
};
