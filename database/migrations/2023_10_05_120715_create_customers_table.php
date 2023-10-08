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
            $table->string('last name');
            $table->string('mother last name');
            $table->string('name');
            $table->decimal('phone');
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
        Schema::dropIfExists('customers');
    }
};
