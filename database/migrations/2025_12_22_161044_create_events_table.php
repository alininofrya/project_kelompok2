<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ukm_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->comment('pengurus UKM');
            $table->string('judul_event');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->string('poster')->nullable(); // upload poster event
            $table->enum('status', ['dibuka', 'ditutup'])->default('dibuka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
