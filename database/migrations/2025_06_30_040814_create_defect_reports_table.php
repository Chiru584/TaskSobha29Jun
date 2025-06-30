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
        Schema::create('defect_reports', function (Blueprint $table) {
            $table->id();
             $table->string('sou');
            $table->string('project');
            $table->string('division');
            $table->string('sub_division');
            $table->string('activity');
            $table->string('sub_activity');
            $table->string('defect_type');
            $table->integer('defect_threshold');
            $table->integer('yearly_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defect_reports');
    }
};
