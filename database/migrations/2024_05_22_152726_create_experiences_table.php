<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order')->default(0);
            $table->string('external_url')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->longText('overview');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('experiences');
    }
};
