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
    Schema::create('assignments', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('people_id');
    $table->integer('item_id');

    $table->foreign('people_id')->references('id')->on('people')->onDelete('no action')->onUpdate('cascade');
    $table->foreign('item_id')->references('id')->on('items')->onDelete('no action'); // Cambiar a ON DELETE NO ACTION
    $table->timestamps();
        });
       

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
