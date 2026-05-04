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
        Schema::create('logistics_distributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('logistics_management_id')->constrained('logistics_management')->cascadeOnDelete();
            $table->string('department');
            $table->string('quantity');
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
        Schema::dropIfExists('logistics_distributions');
    }
};
