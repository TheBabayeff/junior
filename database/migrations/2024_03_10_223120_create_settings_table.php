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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->string('main_logo')->nullable();
            $table->string('main_logoWhite')->nullable();
            $table->string('main_firstPhone')->nullable();
            $table->string('main_secondPhone')->nullable();
            $table->string('main_addressFirst')->nullable();
            $table->string('main_addressSecond')->nullable();

            $table->string('welcome_greenText')->nullable();
            $table->string('welcome_mainText')->nullable();
            $table->longText('welcome_descriptionText')->nullable();

            $table->string('about_firstPhoto')->nullable();
            $table->string('about_firstVideo')->nullable();

            $table->string('about_secondPhoto')->nullable();
            $table->string('about_secondVideo')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
