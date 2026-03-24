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
        Schema::create('valid_cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_id');
            $table->time('reporting_time');
            $table->date('reporting_date');
            $table->foreignId('agency_id');
            $table->string('location');
            $table->string('HOD');
            $table->string('region');
            $table->string('contact_name');
            $table->string('contact_number');
            $table->longText('description');
            $table->string('case_nature');
            $table->longText('feedback_comment');
            $table->string('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valid_cases');
    }
};
