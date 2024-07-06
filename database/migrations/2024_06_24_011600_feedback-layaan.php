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
        
        Schema::create('master-feedback', function (Blueprint $table) {
            $table->id();
            $table->text('commet');
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('star_id');
            $table->unsignedBigInteger('supir_id');
            $table->unsignedBigInteger('start_id');

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
