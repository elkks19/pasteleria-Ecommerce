<?php

use App\Observers\PagoObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divisa_id')->constrained('divisas', 'id');
            $table->foreignId('metodo_de_pago_id')->constrained('metodos_de_pago', 'id');
            $table->float('montoTotal');
            $table->boolean('isCancelado');

            $table->timestamp('fechaCreacion')->nullable();
            $table->timestamp('fechaCancelacion')->nullable();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
