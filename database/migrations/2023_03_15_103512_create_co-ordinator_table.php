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
        Schema::create('co-ordinator', function (Blueprint $table){
        $table->id('co-ordinator_id');
        $table->string('name',60);
        $table->string('department',30);
        $table->string('email',30);
        $table->string('password',500);
        $table->string('contact_number',10);
        $table->string('created_by',60);
        $table->string('updated_by',60);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('co-ordinator');
    }
};
