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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->decimal('Price', 8, 2);
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category');

        });
    }

    public function sales()
{
    return $this->belongsToMany(sales::class)
        ->withPivot('quantity')
        ->withTimestamps();
}
    
    public function customers()
{
    return $this->belongsToMany(customers::class)
        ->withPivot('quantity')
        ->withTimestamps();
}

    public function suppliers()
{
    return $this->belongsToMany(suppliers::class)
        ->withPivot('quantity')
        ->withTimestamps();
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
