<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_technologie', function (Blueprint $table) {
            $table->unsignedSmallInteger('project_id');
            $table->unsignedSmallInteger('technologie_id');

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('technologie_id')->references('id')->on('technologies');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_technologie');
    }
};
