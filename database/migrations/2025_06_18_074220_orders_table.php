<?php

use App\Models\User;
use App\Models\Address;
use App\Models\PaymentMethod;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->constrained('users', 'User_ID')->onDelete('cascade');
            $table->foreignIdFor(Address::class, 'address_id')->constrained()->onDelete('restrict');
            $table->foreignIdFor(PaymentMethod::class, 'payment_method_id')->constrained()->onDelete('restrict');
            $table->string('order_number')->unique();
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', ['pending', 'paid', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};