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
        Schema::create('services', function (Blueprint $table) {
            $table->id('Service_ID');
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->decimal('Price', 10, 2);
            $table->foreignId('Category_ID')->references('Category_ID')->on('categories')->onDelete('cascade');
            $table->string('Image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
