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
        Schema::create('defect_thresholds', function (Blueprint $table) {
            $table->id();
            $table->string('project')->nullable();
            $table->string('division')->nullable();
            $table->string('sub_division')->nullable();
            $table->string('activity')->nullable();
            $table->string('sub_activity')->nullable();
            $table->string('defect_type');

            $table->integer('defect_threshold')->default(0);
            $table->integer('sporadic_threshold')->default(0);
            $table->integer('chronic_threshold')->default(0);
            $table->integer('severity_index')->default(0);
            $table->integer('control_index')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defect_thresholds');
    }
};
