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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('Category_ID');
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->enum('Category_type', ['kopi','benih','pupuk','peralatan','layanan','jasa','News','Coffee Technology','Tips and Trick']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
