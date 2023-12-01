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

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('description');
            $table->float('price', 10, 2);
            $table->integer('stock');
        });

        Schema::create('variations', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('name', 255);
            $table->float('price', 10, 2);
            $table->integer('stock');
            $table->string('image_url', 255)->nullable();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('variations');

    }
};
