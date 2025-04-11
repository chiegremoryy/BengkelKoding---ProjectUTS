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
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'id_pasien')->constrained()->OnDelete(action: 'cascade');
            $table->unsignedBigInteger(column: 'id_dokter')->constrained()->OnDelete(action: 'cascade');
            $table->dateTime(column: 'tgl_periksa')->nullable();
            $table->longText(column: 'catatan')->nullable();
            $table->bigInteger(column: 'biaya_periksa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksas');
    }
};
