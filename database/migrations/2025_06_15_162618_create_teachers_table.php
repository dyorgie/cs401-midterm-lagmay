<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create("teachers", function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('user first name.');
            $table->string('last_name')->comment('user last name.');
            $table->string('email')->max(50)->comment('teachers email');
            $table->string('department')->comment->max(10)('department of teacher');
            $table->dateTime('birthday')->comment('teacher birthday');
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('teachers');
    }
};
