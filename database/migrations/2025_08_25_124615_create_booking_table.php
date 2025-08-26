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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('id_booking');
            $table->string('no_booking', 50)->unique();
            $table->string('customer_name', 100);

            $table->foreignId('table_id')
                  ->constrained('mejas', 'id_meja')
                  ->onDelete('restrict');

            $table->timestamp('booking_date')->useCurrent();
            $table->enum('booking_status', ['pending','confirmed','canceled'])->default('pending');
            $table->timestamps();

            $table->index('booking_date', 'idx_booking_date');
            $table->index('booking_status', 'idx_booking_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
