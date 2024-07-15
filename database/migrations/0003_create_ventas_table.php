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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes', 'id');
            $table->foreignId('pago_id')->constrained('pagos', 'id')->nullable();
            $table->foreignId('envio_id')->constrained('envios', 'id')->nullable();
            $table->foreignId('encargado_id')->constrained('users', 'id');

            $table->dateTime('fechaVenta');
            $table->float('totalCobrado');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
