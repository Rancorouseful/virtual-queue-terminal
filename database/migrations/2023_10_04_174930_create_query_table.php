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
        Schema::create('query', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('window_id')->nullable(false);
            $table->string('code', 10)->nullable(false)->unique();
            $table->timestamp('created_at')->default(now());

            $table->foreign('window_id')->references('id')->on('windows');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('query');
    }
};
