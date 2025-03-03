<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->foreignId('movie_id')->constrained()->onDelete('cascade');
        $table->foreignId('cinema_id')->constrained()->onDelete('cascade');
        $table->integer('price');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
