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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('customer_id')->unique(); // New field for customer ID
            $table->foreignId('invoice_id')->nullable()->constrained('invoices')->onDelete('set null'); // New field for invoice ID
            $table->string('status')->default('active'); // New field for customer status
            $table->string('invoice_number')->unique()->nullable(); // New field for invoice number
            $table->timestamp('last_order_at')->nullable(); // New field for last order timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
