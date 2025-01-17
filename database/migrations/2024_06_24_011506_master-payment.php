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
    Schema::create('master-payment', function (Blueprint $table) {
            $table->id();
            $table->string('name-payment');
            $table->string('image');
            $table->string('rekening');
            $table->text('description-how-to-pay');
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
