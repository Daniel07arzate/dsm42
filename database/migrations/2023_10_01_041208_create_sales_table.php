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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('Sales');
            $table->Date('Fecha');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function productos()
{
    return $this->belongsToMany(Productos::class)
        ->withPivot('quantity')
        ->withTimestamps();
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
