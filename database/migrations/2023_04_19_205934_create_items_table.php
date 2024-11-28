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
            $table->integer('estado')->nullable();  
            // $table->string('est_actual')->nullable();
            $table->string('tipo_item')->nullable();  
            $table->date('fecha_compra')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('activo')->nullable();
            $table->string('service_tag')->nullable();
            $table->string('procesador')->nullable();
            $table->bigInteger('precio')->nullable();
            // $table->string('tipo_equipo')->nullable();

            //MEMORIA RAM
            $table->string('memoriaram')->nullable();
            $table->string('capacidad_ram')->nullable();
            $table->integer('cantidad_ram')->nullable();

            //DISCO DURO
            $table->string('capacidad_discoduro')->nullable();
            $table->string('tegnologia')->nullable();
            $table->integer('cantidad_discoduro')->nullable();

            //DETALLES
            $table->string('sistema_operativo')->nullable();
            $table->string('nombre_aw')->nullable();
            $table->string('ip')->nullable();
            $table->string('mac')->nullable();
            $table->date('fecha_mantenimiento')->nullable();

            //SOFTWARE
            $table->string('oficce')->nullable();
            $table->string('tipo')->nullable();
            $table->string('correo_ofice')->nullable();
            $table->string('antivirus')->nullable();
            $table->string('acceso_remoto')->nullable();

            //COPIA DE SEGURIDAD
            $table->string('copia_seguridad')->nullable();
            $table->string('nombre_carpeta')->nullable();
            $table->string('correo_copiaseg')->nullable();

            //ENCARGADO 
            // $table->integer('people_id');
            // $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            
            
            // LOS NUEVOS
            // $table->string('board')->nullable();
            $table->string('foto')->nullable();

            //campo para guardar el telefono
            $table->string('telefono')->nullable();
          
            //PARA LA CANTIDAD
            $table->integer('cantidad')->nullable();
            //USUARIOS QUE HICIERON X COSA 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
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
