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
            $table->string('est_actual')->nullable();

            $table->date('fecha_compra')->nullable();
            $table->string('marca');
            $table->string('modelo');
            $table->string('activo')->unique();
            $table->string('service_tag')->unique();
            $table->string('procesador');

            //MEMORIA RAM
            $table->string('memoriaram');
            $table->string('capacidad_ram');
            $table->integer('cantidad_ram');

            //DISCO DURO
            $table->string('capacidad_discoduro');
            $table->string('tegnologia');
            $table->integer('cantidad_discoduro');

            //DETALLES
            $table->string('sistema_operativo');
            $table->string('nombre_aw');
            $table->string('ip');
            $table->string('mac');
            $table->date('fecha_mantenimiento')->nullable();

            //SOFTWARE
            $table->string('oficce');
            $table->string('tipo');
            $table->string('correo_ofice');
            $table->string('antivirus');
            $table->string('acceso_remoto');

            //COPIA DE SEGURIDAD
            $table->string('copia_seguridad');
            $table->string('nombre_carpeta');
            $table->string('correo_copiaseg');

            //ENCARGADO 
            $table->integer('people_id');
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            
            
            // LOS NUEVOS
            $table->string('board')->nullable();
            $table->string('foto');
          
            
      
            
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
