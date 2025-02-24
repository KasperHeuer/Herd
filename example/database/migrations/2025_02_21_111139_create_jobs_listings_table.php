<?php

use App\Models\Employer;
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
        Schema::create('jobs_listings', function (Blueprint $table) {
            $table->id("jobId");
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title');
            $table->string('salery');
            $table->timestamps("timestamp");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_listings');
    }
};
