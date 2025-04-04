<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;






return new class extends Migration {
    public function up() {
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->enum('jenis', ['pemasukan', 'pengeluaran']);
            $table->decimal('jumlah', 10, 2);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('keuangan');
    }
};
