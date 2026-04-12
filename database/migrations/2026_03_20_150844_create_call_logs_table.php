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
        Schema::create('call_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('incoming_calls');
            $table->integer('total_calls_received');
            $table->integer('valid_calls');
            $table->integer('prank_calls');
            $table->integer('unanswered_calls');
            $table->string('status');
            $table->string('shift');
            $table->time('start_time');
            $table->time('end_time');
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();
            $table->userstamps();
            $table->userstampSoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_logs');
    }
};
