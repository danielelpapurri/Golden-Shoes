<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('zapatos', function (Blueprint $table) {
            $table->increments('id'); // SERIAL PRIMARY KEY
            $table->string('nombre', 100)->nullable();
            $table->string('marca', 100)->nullable();
            $table->integer('talla')->nullable();
            $table->string('color', 50)->nullable();
            $table->decimal('precio', 10, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zapatos');
    }
};
