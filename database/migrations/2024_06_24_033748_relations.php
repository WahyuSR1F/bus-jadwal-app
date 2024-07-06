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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bus_id')->references('id')->on('master-bus');  
            $table->foreign('wisata_id')->references('id')->on('master-wisata');  
            $table->foreign('supir_id')->references('id')->on('master-supir');  
            $table->foreign('payment_id')->references('id')->on('master-payment');  
            $table->foreign('facility_id')->references('id')->on('master-facility');  
        });

        Schema::table('booking', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('transaksi_id')->references('id')->on('transaksi');  
            $table->foreign('bus_id')->references('id')->on('master-bus');  
            $table->foreign('wisata_id')->references('id')->on('master-wisata');  
            $table->foreign('supir_id')->references('id')->on('master-supir');  
            $table->foreign('payment_id')->references('id')->on('master-payment');  
            $table->foreign('facility_id')->references('id')->on('master-facility');  
            $table->foreign('packet_id')->references('id')->on('master-packet');
        });


        Schema::table('master-packet', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('wisata_id')->references('id')->on('master-wisata');
            $table->foreign('bus_id')->references('id')->on('master-bus');    
        });


        Schema::table('history', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('transaksi_id')->references('id')->on('transaksi');  
            $table->foreign('bus_id')->references('id')->on('master-bus');  
            $table->foreign('wisata_id')->references('id')->on('master-wisata');  
            $table->foreign('supir_id')->references('id')->on('master-supir');  
            $table->foreign('payment_id')->references('id')->on('master-payment');  
            $table->foreign('facility_id')->references('id')->on('master-facility');  
            $table->foreign('packet_id')->references('id')->on('master-packet');
            $table->foreign('booking_id')->references('id')->on('booking');
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
