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
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('enrollment',12);
            $table->string('name',60);
            $table->string('email',40);
            $table->string('contact_num',10);
            $table->string('password',500);
            $table->string('department',40);
            $table->enum('status',["Pending","Approved"])->nullable();
            $table->string('semester',1)->nullable();
            $table->text('photo',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
