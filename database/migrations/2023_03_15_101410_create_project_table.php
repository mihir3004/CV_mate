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
        Schema::create('project', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('enrollment',12);
            $table->string('project_name',50);
            $table->string('project_link',30);
            $table->string('project_duration',10);
            $table->string('role',20)->nullable();
            $table->string('description',500);
            $table->string('company_name',30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
