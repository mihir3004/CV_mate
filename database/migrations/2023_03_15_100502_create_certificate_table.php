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
        Schema::create('certificate', function (Blueprint $table) {
            $table->id('certificate_id');
            $table->string('enrollment',12);
            $table->string('certificate_name',20);
            $table->string('event',20);
            $table->string('level',30);
            $table->string('type',20);
            $table->string('path',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate');
    }
};
