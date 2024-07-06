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
        
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wisata_id');
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('supir_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('facility_id');
            $table->unsignedBigInteger('packet_id')->nullable();
            $table->string('status');
            $table->timestamps();   
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
