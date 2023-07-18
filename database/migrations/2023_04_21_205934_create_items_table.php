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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('activo')->unique();
            $table->string('marca');
            $table->string('service')->unique();
            $table->string('tag')->unique();
            $table->string('descripcion');
            $table->string('foto');
            $table->integer('cantidad');
            $table->date('ult_fecha_mant')->nullable();
          
            $table->string('copia_seguridad')->nullable();
            $table->date('fech_cop_seg')->nullable();
            $table->string('descripcion_copseguridad')->nullable();
            // LOS NUEVOS

            $table->string('ip')->nullable();
            $table->string('ram')->nullable();
            $table->string('cpu')->nullable();
            $table->string('disco_duro')->nullable();
            $table->string('procesador')->nullable();
            $table->string('board')->nullable();
            
            $table->integer('peripherals_id');
            $table->foreign('peripherals_id')->references('id')->on('peripherals')->onDelete('cascade')->onUpdate('cascade');
            $table->string('mouse')->nullable();
            $table->string('teclado')->nullable();
            $table->string('est_actual')->nullable();
            $table->string('descripcion_soft')->nullable();
            $table->integer('people_id');
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
