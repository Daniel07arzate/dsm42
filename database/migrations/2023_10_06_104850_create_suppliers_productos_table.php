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
        Schema::create('suppliers_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('suppliers_id');
            $table->unsignedBigInteger('productos_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('suppliers_id')->references('id')->on('suppliers');
            $table->foreign('productos_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers_productos');
    }
};
