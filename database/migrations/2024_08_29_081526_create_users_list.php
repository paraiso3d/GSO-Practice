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
        Schema::create('users_list', function (Blueprint $table) {
            $table->id();
            $table ->string('FirstName');
            $table->string('LastName');
            $table->string('MiddleName');
            $table->string('Designation');
            $table->char('Email', length: 150);
            $table->boolean('UserType')->default(false)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_list');
    }
};
