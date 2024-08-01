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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('island');
            $table->string('nid');
            $table->date('dob');
            $table->string('age_at_feb');
            $table->string('gurdian_name')->nullable();
            $table->string('gurdian_contact')->nullable();
            $table->foreignId('grade_id')->nullable()->constrained('grades');
            $table->string('class')->nullable();
            $table->string('index')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
