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
        Schema::create('ankets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vacancy_id')->cascadeOnDelete();
            $table->string('name');
            $table->string('phone');
            $table->longText('photo');
            $table->longText('pdf');
            $table->enum('status', ['new', 'viewed'])->default('new');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ankets');
    }
};
